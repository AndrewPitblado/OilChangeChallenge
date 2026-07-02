<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showForm()
    {
       return view('home');
    }


    /**
     * Process the form submission and validate the input data.
     */
    public function processForm(Request $request)
    {
        $validatedData = $request->validate([
            'current_odometer' => 'required|integer|min:0|gt:previous_odometer',
            'previous_odometer' => 'required|integer|min:0',
            'last_oil_change_date' => 'required|date|before:today',
        ]);

        return view('result', $validatedData);
    }

    /**
     * Display the results page unique to the submitted form data.
     */
    public function show(string $id)
    {
        
    }

}
