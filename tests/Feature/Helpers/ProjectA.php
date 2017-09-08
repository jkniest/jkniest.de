<?php

namespace Tests\Feature\Helpers;

use App\Projects\Project;

/**
 * Example Project A
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
 * @category Testing
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class ProjectA extends Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name = 'Project A';

    /**
     * The slug
     *
     * @var string
     */
    protected $slug = 'project-a';

    /**
     * The meta tags
     *
     * @var array
     */
    protected $tags = ['example', 'waffle', 'iron'];

    /**
     * All related media files
     *
     * @var array
     */
    protected $media = [
        'media-a.png',
        'another.jpg',
        'https://youtube.com/v/abcdefg'
    ];

    /**
     * The cover media file (should be an image)
     *
     * @var string
     */
    protected $cover = 'cover-a.png';

    /**
     * The year when this project was created
     *
     * @var int
     */
    protected $year = 2015;

    /**
     * The date when this project was added to the portfolio (or when this project
     * was created).
     *
     * Format: yyyy-mm-dd
     *
     * @var string
     */
    protected $date = '2015-05-14';

    /**
     * Additional meta information that is shown inside the project page
     *
     * @var array
     */
    protected $meta = [
        'framework' => 'Unicorn!',
        'language'  => 'FlowerPower'
    ];
}