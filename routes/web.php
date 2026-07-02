<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
//Default route to the home page
Route::get('/', [FormController::class, 'showForm']);

//This is the route for the result page after the user successully submits the form, with proper validation
Route::post('/result', [FormController::class, 'processForm'])->name('result.store');
Route::get('/result/{formData}', [FormController::class, 'show'])->name('result.show');