<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\form_data;
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

        $form_data = form_data::create($validatedData);
        return view('result', compact('form_data'));
    }

    /**
     * Display the results page unique to the submitted form data.
     */
    public function show(string $id)
    {
        $form_data = form_data::findOrFail($id);
        
        return view('result', [
            'form_data' => $form_data,
        ]);
    }

}
