<?php

namespace App;

/**
 * This class represents a media object (an image or video)
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
class Media
{
    /**
     * The source path (youtube, image name, etc..)
     *
     * @var string
     */
    private $source;

    /**
     * The media type (youtube or image)
     *
     * @var string
     */
    private $type;

    /**
     * The project folder path (relative to public/media)
     *
     * @var string
     */
    private $folder;

    /**
     * Media constructor.
     *
     * @param string $source The source path (youtube, image name, etc..)
     * @param string $folder The media folder name
     */
    function __construct(string $source, string $folder)
    {
        $this->source = $source;
        $this->folder = $folder;
        $this->setType();
    }

    /**
     * Get the type of the media (currently youtube, image)
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the source of this media
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Get the media image path (public/media/{folder}/source_{name}
     *
     * @return string
     */
    public function getImagePath()
    {
        return asset('media/' . $this->folder . '/source_' . $this->source);
    }

    /**
     * Set the type based on the source string.
     */
    private function setType()
    {
        $regex = '/(youtube\.com\/embed\/)(.+)/';
        preg_match_all($regex, $this->source, $matches, PREG_SET_ORDER, 0);

        if (count($matches) > 0) {
            $this->type = 'youtube';
        } else {
            $this->type = 'image';
        }
    }
}