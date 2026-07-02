<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FormData;
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

        $formData = FormData::create($validatedData);
        return redirect()->route('result.show', $formData)->with('success', 'Congratulations! Your form has been successfully submitted.');
    }

    /**
     * Display the results page unique to the submitted form data.
     */
    public function show(FormData $formData)
    {
        return view('result', compact('formData'))->with('success', session('success'));
    }

}
