<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\ProjectItems;
use App\Projects\Project;
use Roumen\Sitemap\Sitemap;
use Illuminate\Support\Facades\File;

/**
 * Sitemap controller.
 *
 * Copyright (C) 2017 Jordan Kniest
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category Core
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class SitemapController extends Controller
{
    /**
     * Generate the sitemap with the cached project results.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        $sitemap = app(Sitemap::class);

        $loaderDate = File::lastModified(storage_path('projects.json'));

        $this->addStaticPages($sitemap, $loaderDate);

        $this->addProjectPages($sitemap);

        return $sitemap->render('xml');
    }

    /**
     * Add all static pages to the sitemap.
     *
     * @param Sitemap $sitemap    The sitemap instance
     * @param string  $loaderDate The date when the project loader was created
     *
     * @return void
     */
    protected function addStaticPages(Sitemap $sitemap, string $loaderDate)
    {
        $images = [
            ['url' => url('/img/2017.jpg'), 'title' => 'Jordan Kniest'],
        ];
        $sitemap->add(url('/'), Carbon::createFromTimestamp($loaderDate), 1.0, 'weekly', $images);

        $sitemap->add(url('/imprint'), Carbon::createFromTimestamp($loaderDate), 0.8, 'monthly');
        $sitemap->add(url('/privacy'), Carbon::createFromTimestamp($loaderDate), 0.8, 'monthly');
    }

    /**
     * Add every project to the sitemap.
     *
     * @param Sitemap $sitemap The sitemap instance
     *
     * @return void
     */
    protected function addProjectPages(Sitemap $sitemap)
    {
        ProjectItems::cached()->each(function ($project) use ($sitemap) {
            $images = [
                ['url' => $project->getCoverPath(), 'title' => $project->getName()],
            ];

            $route = route('project', ['slug' => $project->getSlug()]);
            $sitemap->add($route, Carbon::parse($project->getDate()), 0.9, 'monthly', $images);
        });
    }
}
