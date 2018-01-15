<?php

namespace App\Projects;

/**
 * Mission: Delta-8x34 is a unity3d mini-game made for the ludum dare competition.
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
 *
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 *
 * @link     https://jkniest.de
 */
class MissionDelta8x34 extends Project
{
    /**
     * The name.
     *
     * @var string
     */
    protected $name = 'Mission: Delta-8x34';

    /**
     * The slug.
     *
     * @var string
     */
    protected $slug = 'mission-delta-8x34';

    /**
     * The meta tags.
     *
     * @var array
     */
    protected $tags = ['unity3d', 'game', 'c#', 'ludum-dare'];

    /**
     * All related media files.
     *
     * @var array
     */
    protected $media = [
        'main.png',
        'planets.png',
        'ship.png',
    ];

    /**
     * The cover media file (should be an image).
     *
     * @var string
     */
    protected $cover = 'ship.png';

    /**
     * The year when this project was created.
     *
     * @var int
     */
    protected $year = 2017;

    /**
     * The date when this project was added to the portfolio (or when this project
     * was created).
     *
     * Format: yyyy-mm-dd
     *
     * @var string
     */
    protected $date = '2017-04-25';

    /**
     * Additional meta information that is shown inside the project page.
     *
     * @var array
     */
    protected $meta = [
        'engine'    => 'Unity3D',
        'languages' => 'C#',
    ];
}
