<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/result', function (Illuminate\Http\Request $request){
    $validatedData = $request->validate([
        'current_odometer' => 'required|integer|min:0|gt:previous_odometer',
        'previous_odometer' => 'required|integer|min:0',
        'last_oil_change_date' => 'required|date|before_or_equal:today',
    ]);
    return view('result', $validatedData);
});