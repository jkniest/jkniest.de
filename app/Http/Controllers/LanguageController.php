<?php

namespace App\Http\Controllers;

/**
 * Update the language of the user
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class LanguageController extends Controller
{
    /**
     * The user can change the language based on the given language code
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
