<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandController extends Controller
{
    public function __construct()
    {
//        return view('random');
    }

    public function value($var)
    {
        return view('demonstration', ['vars' => $var]);
    }

    public function getPage()
    {
        return view('random');
    }

    public function store(Request $request)
    {
        $id = $request->input('number');
        dump($id);
        if ($id == NULL) {
            return 'id is null.<br>';
        }
        if ($id == 10) {
            return 'Congratulations! You guessed right.';
        } else {
            return 'You lost :(<br>Try again!';
        }
    }
}
