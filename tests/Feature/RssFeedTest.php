<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\Feature\Helpers\ProjectA;
use Tests\Feature\Helpers\ProjectB;
use Illuminate\Support\Facades\Config;

/**
 * Test the rss feed.
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
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class RssFeedTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_rss_feed_based_on_all_projects()
    {
        // Given: There are two projects (ProjectA & ProjectB)
        Config::set('portfolio.projects', [
            ProjectA::class,
            ProjectB::class,
        ]);

        // When: We visit the /feed.xml page
        $response = $this->get('/feed.xml')
            ->assertStatus(200);

        // Then: We should see a valid feed
        $response->assertSee('<feed xmlns="http://www.w3.org/2005/Atom">');
        $response->assertSee('</feed>');

        $response->assertSee('<title><![CDATA[Project A]]></title>');
        $response->assertSee('<title><![CDATA[Project B]]></title>');
    }

    /** @test */
    public function it_caches_the_rss_feed()
    {
        // Given: There is one project
        Config::set('portfolio.projects', [
            ProjectA::class,
        ]);

        // When: We visit the feed page
        $response = $this->get('/feed.xml')
            ->assertStatus(200);

        // Then: The response should contain project a, but not project b
        $response->assertSee('<title><![CDATA[Project A]]></title>');
        $response->assertDontSee('<title><![CDATA[Project B]]></title>');

        // Given: We add another project
        Config::set('portfolio.projects', [
            ProjectA::class,
            ProjectB::class,
        ]);

        // When: We visit the feed page again
        $response = $this->get('/feed.xml')
            ->assertStatus(200);

        // Then: The response should not contain the second item
        $response->assertSee('<title><![CDATA[Project A]]></title>');
        $response->assertDontSee('<title><![CDATA[Project B]]></title>');
    }
}
