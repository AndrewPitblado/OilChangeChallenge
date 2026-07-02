<?php

use Illuminate\Support\Facades\Route;

//Default route to the home page
Route::get('/', function () {
    return view('home');
});

//This is the route for the result page after the user successully submits the form, with proper validation
Route::post('/result', function (Illuminate\Http\Request $request){
    $validatedData = $request->validate([
        'current_odometer' => 'required|integer|min:0|gt:previous_odometer',
        'previous_odometer' => 'required|integer|min:0',
        'last_oil_change_date' => 'required|date|before:today',
    ]);
    return view('result', $validatedData);
});