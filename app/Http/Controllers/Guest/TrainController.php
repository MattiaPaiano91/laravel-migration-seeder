<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }

    public function departing()
    {
        $trainsToday = Train::where('departure_date','LIKE','2024-02-27')->get();
        return view('departure', compact('trainsToday'));
    }

}
