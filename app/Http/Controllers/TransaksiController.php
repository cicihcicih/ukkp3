<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Paket;
use App\Models\DetailTransaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksis = Transaksi::all();
        $members    = Member::all();
        $pakets     = Paket::all()->where('outlet_id', Auth()->user()->outlet_id);
        $outlets    = Outlet::all();
        $users      = User::all();
        $transaksi  = Transaksi::all();
        return view('transaksi.index',compact('members','pakets','transaksis','outlets','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Transaksi $transaksi, Request $request)
    {
        //
        $transaksi = new Transaksi;
        $transaksi->outlets_id       = Auth::user()->outlet_id;
        $transaksi->kode_invoice    = '';
        $transaksi->member_id       = '1';
        $transaksi->tgl             = Carbon::now()->format('Y-m-d');
        $transaksi->batas_waktu     = Carbon::now()->format('Y-m-d');
        $transaksi->tgl_bayar       = Carbon::now()->format('Y-m-d');
        $transaksi->biaya_tambahan  = 0;
        $transaksi->diskon          = 0;
        $transaksi->pajak           = 0;
        $transaksi->status          = 'baru';
        $transaksi->dibayar         = 'belum_dibayar';
        $transaksi->user_id        = Auth::user()->id;
        $transaksi->save();
        // $idTransaksi = $transaksi->id;
        return redirect()->route('transaksi.proses', $transaksi->id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'outlets_id'           => 'required',
        //     'kode_invoice'        => 'required',
        //     'member_id'           => 'required',
        //     'tgl'                 => 'required',
        //     'batas_waktu'         => 'required',
        //     'tgl_bayar'           => 'required',
        //     'biaya_tambahan'      => 'required',
        //     'diskon'              => 'required',
        //     'pajak'               => 'required',
        //     'status'              => 'required',
        //     'dibayar'             => 'required',
        //     'user_id'             => 'required',
        // ]);
        // Transaksi::create([
        //     'outlets_id'           => $request->outlets_id,
        //     'kode_invoice'        => $request->kode_invoice,
        //     'member_id'           => $request->member_id,
        //     'tgl'                 => $request->tgl,
        //     'batas_waktu'         => $request->batas_waktu,
        //     'tgl_bayar'           => $request->tgl_bayar,
        //     'biaya_tambahan'      => $request->biaya_tambahan,
        //     'diskon'              => $request->diskon,
        //     'pajak'               => $request->pajak,
        //     'status'              => $request->status,
        //     'dibayar'             => $request->dibayar,
        //     'user_id'             => $request->user_id,
        // ]);
        // return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
        $member    = Member::all();
        $outlet    = Outlet::all();
        $user      = User::all();
        $transaksi = Transaksi::find($transaksi->id);
        return view('transaksi.show',compact('transaksi','member','outlet','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi, Paket $paket)
    {
        $pakets = Paket::all();
        $transaksis = Transaksi::all();
        $member = Member::all();
        return view('transaksi.proses', compact('pakets','member','transaksis'));

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    }
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        $request->validate([
            'outlets_id'           => 'required',
            'kode_invoice'        => 'required',
            'member_id'           => 'required',
            'tgl'                 => 'required',
            'batas_waktu'         => 'required',
            'tgl_bayar'           => 'required',
            'biaya_tambahan'      => 'required',
            'diskon'              => 'required',
            'pajak'               => 'required',
            'status'              => 'required',
            'dibayar'             => 'required',
            'user_id'             => 'required',
            ]);
            $transaksi = Transaksi::find($transaksi->id);
            $transaksi->   outlets_id            =  $request->outlets_id;
            $transaksi->   kode_invoice         =  $request->kode_invoice;
            $transaksi->   member_id            =  $request->member_id;
            $transaksi->   tgl                  =  $request->tgl;
            $transaksi->   batas_waktu          =  $request->batas_waktu;
            $transaksi->   tgl_bayar            =  $request->tgl_bayar;
            $transaksi->   biaya_tambahan       =  $request->biaya_tambahan;
            $transaksi->   diskon               =  $request->diskon;
            $transaksi->   pajak                =  $request->pajak;
            $transaksi->   status               =  $request->status;
            $transaksi->   dibayar              =  $request->biaya_tambahan;
            $transaksi->   user_id              =  $request->user_id;
            $transaksi->update();
            return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //$transaksi = Transaksi::find($transaksi->id);
        $transaksi->delete();
        return redirect('/transaksi');

    }
}
