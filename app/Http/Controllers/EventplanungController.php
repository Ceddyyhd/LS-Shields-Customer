<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventplanungController extends Controller
{
    public function index()
    {
        $events = DB::connection('mysql2')
            ->table('eventplanung')
            ->where('vorname_nachname', auth()->user()->name)
            ->select('datum_uhrzeit', 'anfrage', 'ort', 'event_lead', 'event', 'status')
            ->orderBy('datum_uhrzeit', 'desc')
            ->get();

        return view('customer.eventplanung', compact('events'));
    }
}