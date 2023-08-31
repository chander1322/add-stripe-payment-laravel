<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function test(){
        return view('frontend.home');
    }

    public function stripe(){
        return view('stribe');
    }
}
