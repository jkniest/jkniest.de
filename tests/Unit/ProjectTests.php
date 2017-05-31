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

use App\Projects\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
        $path = asset('media/Testproject/medium_example.png');

        $this->assertEquals($path, $this->project->getCoverPath(256));
    }

    /** @test */
    public function it_can_return_the_description_view_path()
    {
        $actual = 'projects.partials.en.Testproject_short';

        $this->assertEquals($actual, $this->project->getDescription());
    }
}

class ExampleProject extends Project
{
    protected $name = 'Testproject';

    protected $slug = 'my-slug';

    protected $cover = 'example.png';
}