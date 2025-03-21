<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\InvitationCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     */
    public function store(Request $request)
    {
        // ...existing validation code...

        // Check invitation code in second DB
        $invitationCode = DB::connection('mysql2')
            ->table('invitation_codes')
            ->where('code', $request->invitation_code)
            ->where('used', false)
            ->first();

        if (!$invitationCode) {
            return back()
                ->withErrors(['invitation_code' => 'Invalid invitation code'])
                ->withInput($request->except('password'));
        }

        // Create user in primary DB
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Mark invitation code as used
        DB::connection('mysql2')
            ->table('invitation_codes')
            ->where('code', $request->invitation_code)
            ->update(['used' => true]);

        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}