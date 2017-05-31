<?php

namespace App\Projects;

use Illuminate\Support\Facades\File;

/**
 * Base class for all projects
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
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name;

    /**
     * The slug
     *
     * @var string
     */
    protected $slug;

    /**
     * The meta tags
     *
     * @var array
     */
    protected $tags;

    /**
     * All related media files
     *
     * @var array
     */
    protected $media;

    /**
     * The cover media file (should be an image)
     *
     * @var string
     */
    protected $cover;

    /**
     * The year when this project was created
     *
     * @var int
     */
    protected $year;

    /**
     * Additional meta information that is shown inside the project page
     *
     * @var array
     */
    protected $meta;

    /**
     * Return the name of the project
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Return the slug of the project
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Return the public path to the cover image
     *
     * @param int $size The image size
     *
     * @return string
     */
    public function getCoverPath(int $size)
    {
        $prefix = $this->getPrefixBySize($size);

        return asset(
            'media/' . $this->getClassName() . '/' . $prefix . '_' . $this->cover
        );
    }

    /**
     * Return the view name of the short description
     *
     * @return string
     */
    public function getDescription()
    {
        $view = 'projects.partials.' . app()->getLocale() . '.' . $this->getClassName() . '_short';

        if (view()->exists($view)) {
            return $view;
        }

        return 'projects.partials.en.' . $this->getClassName() . '_short';
    }

    /**
     * Create a new project based on the slug. The class will be loaded from the
     * "storage/projects.json" file.
     *
     * @param string $slug The slug of the project
     *
     * @return Project
     */
    public static function createFromSlug(string $slug)
    {
        $project = collect(json_decode(File::get(storage_path('projects.json'))))
            ->first(function ($project, $key) use ($slug) {
                return $key == $slug;
            });

        return new $project();
    }

    /**
     * Return the prefix based on the given size
     *
     * @param int $size The image size
     *
     * @return string
     */
    protected function getPrefixBySize(int $size)
    {
        switch ($size) {
            case 1024:
                return 'big';

            case 512:
                return 'featured';

            case 256:
                return 'medium';

            case 128:
                return 'small';

            default:
                return 'source';
        }
    }

    /**
     * Get a converted class name that only allows digits and letters.
     *
     * @return string
     */
    protected function getClassName()
    {
        return preg_replace('~[^\pL\d]+~u', '', $this->name);
    }
}
