<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greetings($timing)
    {
        switch ($timing) {
            case "morning":
                $greeting = "おはようございます";
                return view('greetings.morning', ['greeting' => $greeting]);
                break;
            case "afternoon":
                $greeting = "こんにちは";
                return view('greetings.afternoon', ['greeting' => $greeting]);
                break;
            case "evening":
                $greeting = "こんばんは";
                return view('greetings.evening', ['greeting' => $greeting]);
                break;
            case "night":
                $greeting = "おやすみなさい";
                return view('greetings.night', ['greeting' => $greeting]);
                break;
            default:
                $greeting = "時間帯を正しく入力してください";
        }
    }
}
