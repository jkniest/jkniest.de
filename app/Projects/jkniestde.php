<?php

namespace App\Projects;

/**
 * Project: jkniest.de  - The portfolio itself
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
 * @category Projects
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class jkniestde extends Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name = 'jkniest.de';

    /**
     * The slug
     *
     * @var string
     */
    protected $slug = 'jkniest-de';

    /**
     * The meta tags
     *
     * @var array
     */
    protected $tags = ['laravel', 'php', 'sass', 'javascript'];

    /**
     * All related media files
     *
     * @var array
     */
    protected $media = [
        'header.png',
        'projects.png',
        'full.png'
    ];

    /**
     * The cover media file (should be an image)
     *
     * @var string
     */
    protected $cover = 'cover.png';

    /**
     * The year when this project was created
     *
     * @var int
     */
    protected $year = 2017;

    /**
     * Additional meta information that is shown inside the project page
     *
     * @var array
     */
    protected $meta = [
        'framework' => 'Laravel',
        'languages' => 'PHP, Javascript, Sass',
        'license'   => 'AGPL-3.0'
    ];
}
