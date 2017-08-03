<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

/**
 * Generate the dynamic project class loader. It will generate a json file that contains
 * all slugs and the related classes.
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
class ProjectLoadCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'projects:load';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the project class loader';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param Filesystem $files The laravel file system
     *
     * @return void
     */
    public function handle(Filesystem $files)
    {
        $projects = collect(config('portfolio.projects'))
            ->map(function ($project) {
                return new $project();
            })->unique(function ($project) {
                return $project->getSlug();
            })->map(function ($project) {
                return [$project->getSlug() => get_class($project)];
            })->collapse()
            ->toJson();

        $files->put(storage_path('projects.json'), $projects);
        $this->info('Project-Loader file created!');
    }
}
