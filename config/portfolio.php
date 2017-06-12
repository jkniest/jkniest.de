<?php
/**
 * Custom configuration for the portfolio system
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

return [

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    |
    | Here are all of your projects.
    */

    'projects' => [
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Author Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of the author.
    */

    'author' => env('AUTHOR', 'Jordan'),

    /*
    |--------------------------------------------------------------------------
    | Contact links
    |--------------------------------------------------------------------------
    |
    | This array contains the links for the social media platforms
    */

    'links'         => [
        'mail'     => env('LINK_MAIL', 'mailto:contact@jkniest.de'),
        'twitter'  => env('LINK_TWITTER', 'https://twitter.com/j_kniest'),
        'xing'     => env('LINK_XING', 'https://www.xing.com/profile/Jordan_Kniest'),
        'linkedin' => env('LINK_LINKEDIN', 'https://www.linkedin.com/in/jordan-kniest-357679144'),
        'github'   => env('LINK_GITHUB', 'https://github.com/jkniest')
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache time
    |--------------------------------------------------------------------------
    |
    | The amount of minutes that the html cache files are existing
    */
    'cache-time'    => 1440,

    /*
    |--------------------------------------------------------------------------
    | Cache enabled
    |--------------------------------------------------------------------------
    |
    | Is the html cache currently enabled?
    */
    'cache-enabled' => env('CACHE_ENABLED', true),
];
