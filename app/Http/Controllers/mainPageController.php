<?php

namespace App\Http\Controllers;

abstract class mainPageController
{
    public function show()
    {
        return view('mainPage');
    }
}
