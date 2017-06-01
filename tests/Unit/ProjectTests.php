<?php
/**
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
 */

namespace Tests\Unit;

use App\Media;
use App\Projects\Project;
use Tests\TestCase;

class ProjectTests extends TestCase
{
    /**
     * @var Project
     */
    protected $project;

    protected function setUp()
    {
        parent::setUp();

        $this->project = new ExampleProject();
    }

    /** @test */
    public function it_can_return_the_name()
    {
        $this->assertEquals('Testproject', $this->project->getName());
    }

    /** @test */
    public function it_can_return_the_slug()
    {
        $this->assertEquals('my-slug', $this->project->getSlug());
    }

    /** @test */
    public function it_can_return_the_cover_path()
    {
        $path = asset('media/Testproject/cover_example.png');

        $this->assertEquals($path, $this->project->getCoverPath());
    }

    /** @test */
    public function it_can_return_the_description_view_path()
    {
        $actual = 'projects.partials.en.Testproject_short';

        $this->assertEquals($actual, $this->project->getDescription());
    }

    /** @test */
    public function it_can_return_all_media_files()
    {
        $this->assertCount(3, $this->project->getMedia());
        $this->assertInstanceOf(Media::class, $this->project->getMedia()[0]);
    }

    /** @test */
    public function it_can_return_all_tags()
    {
        $this->assertCount(3, $this->project->getTags());
        $this->assertEquals('unity', $this->project->getTags()[0]);
        $this->assertEquals('example', $this->project->getTags()[1]);
        $this->assertEquals('software', $this->project->getTags()[2]);
    }

    /** @test */
    public function it_can_return_the_view()
    {
        $actual = 'projects.partials.en.Testproject';

        $this->assertEquals($actual, $this->project->getView());
    }
}

class ExampleProject extends Project
{
    protected $name = 'Testproject';

    protected $slug = 'my-slug';

    protected $cover = 'example.png';

    protected $media = [
        'my-file.png',
        'someother.jpg',
        'http://youtube.com'
    ];

    protected $tags = [
        'unity', 'example', 'software'
    ];
}