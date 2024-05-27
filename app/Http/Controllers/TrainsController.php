<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    public function trains()
    {
        $date = now()->toDateString();
        $trains_all = Trains::all();
        $trains = Trains::selectRaw("*, DATE(departure_time) as departure_date")
        ->having('departure_date', '>=', $date)
        ->get();

        return view('trains', compact('trains'), compact('trains_all'));
    }
}
