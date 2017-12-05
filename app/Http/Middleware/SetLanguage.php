<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;

/**
 * Set the language based on the session and the browser language.
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
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
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
