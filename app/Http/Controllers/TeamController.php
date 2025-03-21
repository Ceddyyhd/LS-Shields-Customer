<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    private $hiddenUserIds = [17,1];
    private $hiddenRoleIds = [18];
    private $levelOrder = [
        'System' => 1,
        'Leitung' => 2,
        'Geschäftsführung' => 3,
        'Ausbilder' => 4,
        'Mitarbeiter' => 5
    ];

    public function index()
{
    $employees = DB::connection('mysql2')
        ->table('users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->where('users.gekuendigt', 'no_kuendigung')
        ->where('users.bewerber', 'nein')
        ->whereNotIn('users.id', $this->hiddenUserIds)
        ->whereNotIn('users.role_id', $this->hiddenRoleIds)
        ->select(
            'users.id', 
            'users.name', 
            'users.profile_image', 
            'users.role_id', 
            'roles.name as role_name', 
            'roles.level',
            'roles.value'
        )
        ->orderByRaw("CASE roles.level 
            WHEN 'System' THEN 1 
            WHEN 'Leitung' THEN 2
            WHEN 'Geschäftsführung' THEN 3
            WHEN 'Ausbilder' THEN 4
            WHEN 'Mitarbeiter' THEN 5
            ELSE 5 END")
        ->orderBy('roles.value', 'desc')  // Sort by role value within same level
        ->orderBy('users.id', 'asc')      // Finally sort by user ID for consistency
        ->get()
        ->groupBy('level');

    return view('landingpage.team', compact('employees'));
}

    public function homeTeam()
{
    $shownUserIds = [18,19]; // Replace with desired user IDs

    $employees = DB::connection('mysql2')
        ->table('users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->where('users.gekuendigt', 'no_kuendigung')
        ->where('users.bewerber', 'nein')
        ->whereIn('users.id', $shownUserIds)
        ->orderByRaw("FIELD(users.id, " . implode(',', $shownUserIds) . ")")
        ->select('users.id', 'users.name', 'users.profile_image', 'users.role_id', 'roles.name as role_name', 'roles.level')
        ->get();

    return view('landingpage.home', compact('employees'));
}
}