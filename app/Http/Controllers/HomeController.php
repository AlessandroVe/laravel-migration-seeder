<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\trip;

class HomeController extends Controller
{
    public function index(){
        $all_trips = trip::all();
        return view('home',compact('all_trips'));
    }
}
