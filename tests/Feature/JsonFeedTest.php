<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Tests\Feature\Helpers\ProjectA;
use Tests\Feature\Helpers\ProjectB;
use Tests\TestCase;

/**
 * Test the json feed.
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
 *
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 *
 * @link     https://jkniest.de
 */
class JsonFeedTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_json_feed_based_on_all_projects()
    {
        $this->withoutExceptionHandling();

        // Given: There are two projects (ProjectA & ProjectB)
        Config::set('portfolio.projects', [
            ProjectA::class,
            ProjectB::class,
        ]);

        // When: We visit the /feed.json page
        $response = $this->get('/feed.json')
            ->assertStatus(200);

        // Then: We should see a valid feed
        $response->assertJson([
            'title'         => config('app.name'),
            'home_page_url' => config('app.url'),
            'feed_url'      => url('feed.json'),
            'author'        => [
                'url'  => config('app.url'),
                'name' => config('portfolio.author'),
            ],
            'favicon'       => url('favicon.ico'),
            'version'       => 'https://jsonfeed.org/version/1',
            'items'         => [
                [
                    'date_published' => '2016-01-17T00:00:00+00:00',
                    'title'          => 'Project B',
                    'id'             => 'project-b',
                    'url'            => url('/project/project-b'),
                    'image'          => url('media/ProjectB/cover_cover-b.png'),
                    'tags'           => [
                        'example', 'b', 'water',
                    ],
                ],
                [
                    'date_published' => '2015-05-14T00:00:00+00:00',
                    'title'          => 'Project A',
                    'id'             => 'project-a',
                    'url'            => url('/project/project-a'),
                    'image'          => url('media/ProjectA/cover_cover-a.png'),
                    'tags'           => [
                        'example', 'waffle', 'iron',
                    ],
                ],
            ],
        ]);
    }

    /** @test */
    public function it_caches_the_json_feed()
    {
        // Given: There is one project
        Config::set('portfolio.projects', [
            ProjectA::class,
        ]);

        // When: We visit the feed page
        $response = $this->get('/feed.json')
            ->assertStatus(200);

        // Then: The response should contain one item
        $this->assertCount(1, $response->json()['items']);

        // Given: We add another project
        Config::set('portfolio.projects', [
            ProjectA::class,
            ProjectB::class,
        ]);

        // When: We visit the feed page again
        $response = $this->get('/feed.json')
            ->assertStatus(200);

        // Then: The response should also contain one item
        $this->assertCount(1, $response->json()['items']);
    }

    /** @test */
    public function it_regenerated_the_cache_when_the_project_loader_is_regenerated()
    {
        File::shouldReceive('put')->andReturnNull();

        // Given: There is one project
        Config::set('portfolio.projects', [
            ProjectA::class,
        ]);

        // When: We visit the feed page
        $response = $this->get('/feed.json')
            ->assertStatus(200);

        // Then: The response should contain one item
        $this->assertCount(1, $response->json()['items']);

        // Given: We add another project
        Config::set('portfolio.projects', [
            ProjectA::class,
            ProjectB::class,
        ]);

        // When: We reload the project loader
        $this->artisan('project:load');

        // And then: We visit the feed page again
        $response = $this->get('/feed.json')
            ->assertStatus(200);

        // Then: The response should contain two items
        $this->assertCount(2, $response->json()['items']);
    }
}
