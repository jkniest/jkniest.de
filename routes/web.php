<?php
/**
 * Here is where you can register web routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group. Now create something great!
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
 *
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 *
 * @link     https://jkniest.de
 */
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'htmlcache'], function () {
    Route::get('/', 'PageController@index')->name('welcome');

    Route::get('/imprint', 'PageController@imprint')->name('imprint');
    Route::get('/privacy', 'PageController@privacy')->name('privacy');

    Route::get('/project/{slug}', 'ProjectController@show')->name('project');
});

// Language
Route::get('/lang/{code}', 'LanguageController@update')->name('lang');

// JSON feeds
Route::get('/feed.json', 'JsonFeedController@index')->name('feed.json');

// RSS feeds
Route::feeds();

// Sitemap
Route::get('sitemap', 'SitemapController@index')->name('sitemap');
