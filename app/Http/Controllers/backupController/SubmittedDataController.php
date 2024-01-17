<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\SubmittedData;
use Illuminate\Http\Request;









class SubmittedDataController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer',
        ]);

        SubmittedData::create($validatedData);

        return redirect()->route('submit.details')->with('message', 'Data submitted successfully!');
        
    }
}
