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
    if (in_array(strtolower($locale), ['en', 'es'])) {
        App::setLocale($locale);
    }
    return view('welcome');
});
