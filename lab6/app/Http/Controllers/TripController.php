<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    // public function index(){
    //     $trips = Trip::all();
    //     return view('trips.index', ['trips'=>$trips]);
    // }

    public function show($id = null)
    {
        if ($id) {
            $trip = Trip::find($id);
            if (!$trip) {
                return abort(404);
            }
            return view('trips.show', ['trip' => $trip]);
        } else {
            // domyślna
            // $trips = Trip::all();
            // 4 najtańsze
            // $trips = Trip::orderBy('price')->limit(4)->get();
            // losowe wycieczki
            $trips = Trip::inRandomOrder()->limit(4)->get();
            return view('trips.index', ['trips' => $trips]);
        }
    }
}
