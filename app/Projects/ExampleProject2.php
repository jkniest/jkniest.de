<?php

namespace App\Projects;

/**
 * This is another example project
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
class ExampleProject2 extends Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name = "ExampleProject2";

    /**
     * The slug
     *
     * @var string
     */
    protected $slug = "exampleproject2";

    /**
     * The cover image
     *
     * @var string
     */
    protected $cover = "Car-icon.png";

    /**
     * All related media files and videos
     *
     * @var array
     */
    protected $media = [
        'https://www.youtube.com/embed/n0W33QNpPE0',
        'Wallpaper.jpg',
        'Car-icon.png'
    ];
}
