<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    //
    public function admin()
    {
        return view('dasboard.admin');
    }
    public function kasir()
    {
        $member = Member::all();
        return view('dasboard.kasir', compact('member'));
    }
    public function owner()
    {
        return view('dasboard.owner');
    }
}


