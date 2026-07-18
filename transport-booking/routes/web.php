<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// 1. Page Views
Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/newaccount', function () {
    return view('newaccount');
});

Route::get('/startnewrequest', function () {
    return view('startnewrequest');
});

// 2. Registration Logic
Route::post('/newaccount', function (Request $request) {
    $request->validate([
        'last_name' => 'required',
        'first_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);

    $user = User::create([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'email' => $request->email,
        'alternative_email' => $request->alternative_email,
        'mobile_number' => $request->mobile_number,
        'duty_station' => $request->duty_station,
        'department_unit' => $request->department_unit,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect('/home');
});


// 3. Login Logic
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/home'); 
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
});

// 4. Logout Logic
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});

Route::get('/trips', function () {
    $trips = collect();

    return view('trips', compact('trips'));
})->name('trips');

Route::get('/Trips', function () {
    return redirect('/trips');
});
