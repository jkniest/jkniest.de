<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;

/**
 * Set the language based on the browser language
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request The incoming request
     * @param  \Closure                 $next    The next middleware
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('lang') != null) {
            $lang = session('lang');
        } else {
            $lang = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        }

        app()->setLocale($lang);

        return $next($request);
    }
}
