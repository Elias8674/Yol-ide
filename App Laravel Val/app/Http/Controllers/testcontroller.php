<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index()
    {
        $test = "je suis la variable test";

        return view('test');
    }
}
