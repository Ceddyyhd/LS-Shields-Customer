<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnfragenController extends Controller
{
    public function index()
    {
        $anfragen = DB::connection('mysql2')
            ->table('anfragen')
            ->where('erstellt_von', auth()->user()->name)
            ->orderBy('datum_uhrzeit', 'desc')
            ->get();

        return view('customer.anfragen', compact('anfragen'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'kontakt_name' => 'required|string',
        'kontakt_nummer' => 'required|string',
        'max_mitarbeiter' => 'required|numeric',
        'ort' => 'required|string',
        'datum_uhrzeit' => 'required|date',
        'anliegen' => 'required|string'
    ]);

    // Format anfrage text
    $formattedAnfrage = "----------------------------------------\n";
    $formattedAnfrage .= "Ansprechpartner Name: " . $validated['kontakt_name'] . "\n";
    $formattedAnfrage .= "Ansprechpartner Nummer: " . $validated['kontakt_nummer'] . "\n";
    $formattedAnfrage .= "----------------------------------------\n\n";
    $formattedAnfrage .= "Maximale Mitarbeiter: " . $validated['max_mitarbeiter'] . "\n";
    $formattedAnfrage .= "Ort: " . $validated['ort'] . "\n";
    $formattedAnfrage .= "Datum & Uhrzeit: " . $validated['datum_uhrzeit'] . "\n";
    $formattedAnfrage .= "----------------------------------------\n\n";
    $formattedAnfrage .= "Anliegen:\n" . $validated['anliegen'] . "\n";
    $formattedAnfrage .= "----------------------------------------";

    DB::connection('mysql2')->table('anfragen')->insert([
        'vorname_nachname' => $validated['kontakt_name'],
        'telefonnummer' => $validated['kontakt_nummer'],
        'anfrage' => $formattedAnfrage,
        'erstellt_von' => auth()->user()->name,
        'status' => 'Eingetroffen',
        'datum_uhrzeit' => $validated['datum_uhrzeit'],
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect()->back()->with('success', 'Anfrage wurde erfolgreich erstellt');
}
}