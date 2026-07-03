<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
//Default route to the home page
Route::get('/', [FormController::class, 'showForm']);

//These are the routes for the result page after the user successfully submits the form, with proper validation
Route::post('/result', [FormController::class, 'processForm'])->name('result.store');
Route::get('/result/{formData}', [FormController::class, 'show'])->name('result.show');