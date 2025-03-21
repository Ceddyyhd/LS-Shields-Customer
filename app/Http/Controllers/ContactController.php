<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vorname_nachname' => 'required|string|max:255',
            'telefonnummer' => 'required|string|max:255',
            'anfrage' => 'required|string'
        ]);

        Contact::create($validated);

        return response()->json(['message' => 'Ihre Anfrage wurde erfolgreich gesendet']);
    }
}