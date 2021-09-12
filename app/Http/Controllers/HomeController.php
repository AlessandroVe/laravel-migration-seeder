<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\trip;

class HomeController extends Controller
{
    public function index(){
        $all_trips = trip::all();
        $trip_with_train = trip::where('medium','treno')->get();
        $trip_with_airplane = trip::where('medium','aereo')->get();
        
        return view('home',compact('all_trips','trip_with_train','trip_with_airplane'));
    }
}
