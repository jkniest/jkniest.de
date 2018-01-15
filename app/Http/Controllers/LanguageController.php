<?php

namespace App\Http\Controllers;

/**
 * Update the language that the user will see.
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
class LanguageController extends Controller
{
    /**
     * The user can change the language based on the given language code.
     *
     * @param string $code The language code (example: en, de)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($code)
    {
        // Set the language
        app()->setLocale($code);

        // Save the language inside the session
        session()->put('lang', $code);
        session()->save();

        // Redirect back
        return redirect()->back();
    }
}
