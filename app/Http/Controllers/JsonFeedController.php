<?php

namespace App\Http\Controllers;

use App\ProjectItems;
use Mateusjatenee\JsonFeed\Facades\JsonFeed;

/**
 * Generate and show the json feed.
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
 * @category Feeds
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class JsonFeedController extends Controller
{
    /**
     * Show the json feed.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        JsonFeed::setConfig($this->getConfig());

        return response(JsonFeed::setItems(ProjectItems::cached())->toArray());
    }

    /**
     * Generate the json feed configuration.
     *
     * @return array
     */
    protected function getConfig()
    {
        $config = [
            'title'         => config('app.name'),
            'home_page_url' => config('app.url'),
            'feed_url'      => url('feed.json'),
            'author'        => [
                'url'  => config('app.url'),
                'name' => config('portfolio.author'),
            ],
            'favicon'       => url('favicon.ico'),
        ];

        return $config;
    }
}
