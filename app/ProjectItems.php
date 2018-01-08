<?php

namespace App;

use Illuminate\Support\Collection;

/**
 * A simple class to get all projects (fresh or as a cached version).
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
class ProjectItems
{
    /**
     * Perform the following steps:
     * - Load all projects from the configuration
     * - Remove any double projects
     * - Sort them by their creation date (newest first)
     * - And regenerate the key values.
     *
     * @return Collection
     */
    public static function all()
    {
        return collect(config('portfolio.projects'))
            ->map(function ($project) {
                return new $project;
            })->unique(function ($project) {
                return $project->getSlug();
            })->sortBy(function ($project) {
                return $project->getDate();
            }, SORT_REGULAR, true)
            ->values();
    }

    /**
     * Return a cached version of the projects. If the cache does not exists, the static method
     * "all" will be called and all projects will be loaded via configuration.
     *
     * @return Collection
     */
    public static function cached()
    {
        return \Cache::rememberForever('projects', function () {
            return static::all();
        });
    }
}
