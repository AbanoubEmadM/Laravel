<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController
{
    //
    public function welcome()
    {
        return view('hello.welcome', ['name' => 'Abanoub', 'surname' => 'Bebo']);
    }
}
