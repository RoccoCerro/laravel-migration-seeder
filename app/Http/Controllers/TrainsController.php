<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function trains()
    {
        return view('trains');
    }
}
