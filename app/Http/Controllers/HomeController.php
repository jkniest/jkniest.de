<?php

namespace App\Http\Controllers;

/**
 * Handle the request for the index page
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class HomeController extends Controller
{
    /**
     * Render the front page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $featuredProjects = collect(config('portfolio.featured'))->map(function ($name) {
            return new $name();
        });

        $mediumProjects = collect(config('portfolio.medium'))->map(function ($name) {
            return new $name();
        });

        $smallProjects = collect(config('portfolio.other'))->map(function ($name) {
            return new $name();
        });

        return view('welcome', compact('featuredProjects', 'mediumProjects', 'smallProjects'));
    }
}
