<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Trip; 

class BookingController extends Controller {
    public function saveTrip(Request $request)
{
    $request->validate([
        'trip_type' => 'required',
        'pickup_location' => 'required',
        'destination' => 'required',
    ]);

    $data = [
        'trip_type' => $request->trip_type,
        'pickup_location' => $request->pickup_location,
        'destination' => $request->destination,
        'trip_reference' => 'TRP-' . strtoupper(uniqid()), 
        'status' => 'Submitted', 
    ];

    
    \App\Models\Trip::create($data);

    return redirect('/home')->with('success', 'Trip submitted successfully!');
}

    public function index() {
        $trips = Trip::all();
        return view('trips', compact('trips')); 
    }
}