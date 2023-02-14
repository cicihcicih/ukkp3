<?php

namespace App\Http\Controllers;

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
        return view('dasboard.kasir');
    }
    public function owner()
    {
        return view('dasboard.owner');
    }
}


