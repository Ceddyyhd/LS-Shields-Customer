<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('customer.feedback');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'comment' => 'required'
        ]);

        DB::connection('mysql2')->table('feedback')->insert([
            'name' => $validated['name'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'status' => 'Neu',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success', 'Vielen Dank für Ihr Feedback!');
    }
}