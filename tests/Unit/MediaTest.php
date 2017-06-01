<?php

namespace Tests\Unit;

use App\Media;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
