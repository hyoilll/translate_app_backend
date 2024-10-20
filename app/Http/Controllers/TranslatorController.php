<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    /**
     * 翻訳して返す
     */
    public function translateText(Request $req): string {
        $inputLang = $req->input('inputLang');
        $outputLang = $req->input('outputLang');
        $targetText = $req->input('targetText');

        $authKey = config('apiKey.DEEPL_API_KEY');
        $translator = new \DeepL\Translator($authKey);

        $result = $translator->translateText($targetText, null, $outputLang);
        return $result->text;
    }
}
