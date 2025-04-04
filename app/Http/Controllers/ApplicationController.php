<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function create()
{
    // Fetch question settings from DB
    $questions = DB::connection('mysql2')
        ->table('system_settings')
        ->whereIn('key', [
            'application_question_driver_license',
            'application_question_experience',
            'application_question_motivation',
            'application_question_question1',
            'application_question_question2',
            'application_question_question3'
        ])
        ->pluck('value', 'key');

    return view('landingpage.application', compact('questions'));
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
        'question3' => 'required|string',
        'certificate_url' => 'nullable|url',
        'certificate_file' => 'nullable|file|mimes:pdf|max:10240',
    ]);

    // Handle file upload if present
    if ($request->hasFile('certificate_file')) {
        $file = $request->file('certificate_file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('certificates', $filename, 'public');
        $validated['certificate_file'] = $filename;
    }

    Application::create($validated);

    return redirect()->back()->with('success', 'Ihre Bewerbung wurde erfolgreich eingereicht!');
}
}