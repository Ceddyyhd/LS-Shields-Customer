<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('landingpage.application');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'position' => 'required|string',
            'experience' => 'required|string',
            'motivation' => 'required|string',
            'question1' => 'required|string',
            'question2' => 'required|string',
            'question3' => 'required|string'
        ]);

        Application::create($validated);

        return redirect()->back()->with('success', 'Ihre Bewerbung wurde erfolgreich eingereicht!');
    }
}