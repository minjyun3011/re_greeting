<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greetings($words)
    {
        switch ($words) {
            case "morning":
                $timing = "朝のあいさつ";
                $greeting = "おはようございます";
                break;
            case "afternoon":
                $timing = "昼のあいさつ";
                $greeting = "こんにちは";
                break;
            case "evening":
                $timing = "夕方のあいさつ";
                $greeting = "こんばんは";
                break;
            case "night":
                $timing = "夜のあいさつ";
                $greeting = "おやすみなさい";
                break;
            default:
                $timing = "エラー";
                $greeting = "時間帯を正しく入力してください";
        }
                return view('greetings.comments', ['words' => $words, 'timing' => $timing, 'greeting' => $greeting]);
    }
}
