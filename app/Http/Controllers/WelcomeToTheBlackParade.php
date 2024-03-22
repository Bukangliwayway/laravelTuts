<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeToTheBlackParade extends Controller
{
    public function display()
    {

        return view("display");
    }
}
