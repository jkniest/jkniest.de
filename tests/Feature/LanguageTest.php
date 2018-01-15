<?php
/**
 * Copyright (C) 2017 Jordan Kniest.
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

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Test the language routes and methods.
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
class LanguageTest extends TestCase
{
    /** @test */
    public function a_user_can_change_the_language()
    {
        // Given: The default language is english
        $this->assertEquals('en', app()->getLocale());

        // When: The user tries to change the language to german
        $response = $this->get('/lang/de');

        // Then: The language should be german
        $this->assertEquals('de', app()->getLocale());

        // And: The user should be redirected
        $response->assertStatus(302);

        // Also: The language should be saved inside the session
        $this->assertEquals('de', session('lang'));
    }

    /** @test */
    public function the_selected_language_is_saved()
    {
        // Given: The default language should be 'english'
        $this->assertEquals('en', app()->getLocale());

        // Given: A user has saved the language 'german'
        $this->session(['lang' => 'de']);

        // When: The user tries to visit the front page
        $response = $this->get('/');

        // Then: The language should be 'german'
        $this->assertEquals('de', app()->getLocale());
    }
}
