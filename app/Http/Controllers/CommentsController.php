<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
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
                return view('comments.greetings', ['words' => $words, 'timing' => $timing, 'greeting' => $greeting]);
    }

    public function freewords($words)
    {
        return view('comments.freewords', ['words' => $words]);
    }

    public function random()
    {
        $greetings = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        $idx = array_rand($greetings, 1);
        $words = $greetings[$idx];
        return view('comments.random', ['random_words' => $words]);
    }
}

