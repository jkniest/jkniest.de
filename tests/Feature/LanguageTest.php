<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
