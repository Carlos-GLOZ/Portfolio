<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function welcome($locale = 'es') {

        // Set language
        $supported_locales = [
            'en', 
            'es',
        ];
    
        if (!in_array(strtolower($locale), $supported_locales)) {
            $locale = 'es';
        }
        
        App::setLocale($locale);

        // Retrieve projects from JSON
        $projects_json = Storage::json('public/json/projects.json');
        $projects = $projects_json['projects'];
    
        return view('welcome', ['locale' => $locale, 'supported_locales' => $supported_locales, 'projects' => $projects]);
    }
}
