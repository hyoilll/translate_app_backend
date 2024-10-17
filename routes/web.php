<?php

use App\Http\Controllers\TranslatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/translate', [TranslatorController::class, 'translateText']);
