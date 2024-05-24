<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    public function trains()
    {
        $trains_all = Trains::all();
        $trains = Trains::where('date','>=', date(now()->format('Y-m-d')))->get();


        return view('trains', compact('trains'), compact('trains_all'));
    }
}
