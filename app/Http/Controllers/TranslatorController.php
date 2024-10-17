<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    /**
     * 翻訳して返す
     */
    public function translateText(): string {
        return 'hello world';
    }
}
