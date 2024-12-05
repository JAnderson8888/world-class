<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'GOOGLE_MAPS_API_KEY' => env('GOOGLE_MAPS_API_KEY')
    ]);
});
