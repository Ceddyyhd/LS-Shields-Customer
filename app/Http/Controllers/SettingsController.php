<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('customer.setting');
    }

    public function update(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'nummer' => 'required|string',
        'kontonummer' => 'required|string',
        'kontakt_name' => 'required|string',
        'kontakt_nummer' => 'required|string',
        'street' => 'required|string',
        'plz' => 'required|string',
        'city' => 'required|string',
        'password' => 'nullable|min:8|confirmed'
    ]);

    $user = auth()->user();
    
    // Update basic info
    $user->name = $validated['name'];
    $user->nummer = $validated['nummer'];
    $user->kontonummer = $validated['kontonummer'];
    $user->kontakt_name = $validated['kontakt_name'];
    $user->kontakt_nummer = $validated['kontakt_nummer'];
    
    // Update address
    $user->street = $validated['street'];
    $user->plz = $validated['plz'];
    $user->city = $validated['city'];

    // Update password if provided
    if (!empty($validated['password'])) {
        $user->password = Hash::make($validated['password']);
    }

    $user->save();

    return response()->json(['success' => true]);
}
}