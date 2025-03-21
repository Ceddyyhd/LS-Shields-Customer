<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        return view('customer.dashboard');  // Remove announcements from here
    }

    public function getAnnouncements()
{
    try {
        $connection = DB::connection('mysql2');
        $announcements = $connection->table('announcements')
            ->select(['id', 'title', 'description as message', 'priority', 'created_at', 'visibility'])
            ->where(function($query) {
                $query->where('visibility', 'all')
                      ->orWhere('visibility', 'customer');
            })
            ->orderBy('priority', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($announcements);
    } catch (\Exception $e) {
        Log::error('Error fetching announcements: ' . $e->getMessage());
        return response()->json(['error' => 'Could not fetch announcements'], 500);
    }
}
}