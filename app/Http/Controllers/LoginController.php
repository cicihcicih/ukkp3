<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function view()
    {
        return view('auth.login');
    }
    public function proses(Request $request)
    {
        $user = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($user))
        {
            $request->session()->regenerate();
            $user = Auth::user();
            
            if ($user->level == 'admin')
            {
                return redirect()->route('dasboard.admin');
            } else if ($user->level == 'kasir')
            {
                return redirect()->route('dasboard.kasir');
            } else if ($user->level == 'owner')
            {
                return redirect()->route('dasboard.owner');
            } else {
                return redirect()->route('login');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
}
