<?php

namespace Tests\Unit;

use App\Media;
use Tests\TestCase;

/**
 * Test all methods related to the media class
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
class MediaTest extends TestCase
{
    /**
     * @var Media
     */
    protected $media;

    protected function setUp()
    {
        parent::setUp();

        $this->media = new Media('example.png', 'TestProject');
    }

    /** @test */
    public function it_can_set_type_type_of_an_image()
    {
        $this->assertEquals('image', $this->media->getType());
    }

    /** @test */
    public function it_can_set_type_type_of_a_youtube_video()
    {
        $media = new Media('https://www.youtube.com/embed/n0W33QNpPE0', 'TestProject');

        $this->assertEquals('youtube', $media->getType());
    }

    /** @test */
    public function it_can_return_the_source()
    {
        $this->assertEquals('example.png', $this->media->getSource());
    }

    /** @test */
    public function it_can_return_the_image_path()
    {
        $actual = asset('media/TestProject/source_example.png');

        $this->assertEquals($actual, $this->media->getImagePath());
    }

    /** @test */
    public function it_can_return_the_thumbnail_of_an_image()
    {
        $actual = asset('media/TestProject/thumb_example.png');

        $this->assertEquals($actual, $this->media->getThumb());
    }

    /** @test */
    public function it_can_return_the_thumbnail_of_a_youtube_video()
    {
        $media = new Media('https://www.youtube.com/embed/n0W33QNpPE0', 'TestProject');
        $actual = 'http://img.youtube.com/vi/n0W33QNpPE0/0.jpg';

        $this->assertEquals($actual, $media->getThumb());
    }
}
