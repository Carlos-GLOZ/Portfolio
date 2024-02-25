<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{locale?}', function (string $locale = null) {
    $supported_locales = [
        'en', 
        'es',
    ];

    if (!in_array(strtolower($locale), $supported_locales)) {
        $locale = 'es';
    }
    
    App::setLocale($locale);

    return view('welcome', ['locale' => $locale, 'supported_locales' => $supported_locales]);
});
