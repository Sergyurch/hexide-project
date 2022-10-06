<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function changeLocale($locale) {
        $availableLocales = ['uk', 'en'];

        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }

        session(['locale' => $locale]);
        App:: setLocale($locale);

        return redirect()->back();
    }
}
