<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    public function view()
    {
        $outlets = Outlet::all();
        return view('auth.register', compact ('outlets'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'outlet_id' => 'required',

        ],

    );
    User::create([
        'nama' => Str::camel($data['nama']),
        'username' => Str::lower($data['username']),
        'password' => bcrypt($data['password']),
        'role' => 'owner',
        'outlet_id' => Str::lower($data['outlet_id']),

    ]);
    return redirect('/login');
    }
}
