<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', fn () => '✅ Laravel is up!');
Route::get('/generate-key', function () {
    Artisan::call('key:generate');
    return '✅ APP_KEY generated!';
});