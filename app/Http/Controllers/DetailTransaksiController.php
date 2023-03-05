<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DtailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detailTransaksi = DetailTransaksi::all();
        $transaksi       = Transaksi::all();
        $paket           = Paket::all();
        return view('detail_transaksi.index', compact('detailTransaksi','transaksi','paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $detailTransaksi = DetailTransaksi::all();
        $transaksi       = Transaksi::all();
        $paket           = Paket::all();
        return view('detail_transaksi.create', compact('detailTransaksi','transaksi','paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $transaksi)
    {
        //
        $request->validate([
            'paket_id'  => 'required',
            'qty'       => 'required'
        ],
        [
            'paket_id.required' => 'Pilih Paket',
            'qty.required'      => 'Isi Qty'
        ]);

        $detailTransaksi = new DetailTransaksi;
        $detailTransaksi->transaksi_id  = $transaksi;
        $detailTransaksi->paket_id      = $request->paket_id;
        $detailTransaksi->qty           = $request->qty;
        $detailTransaksi->save();

        return redirect()->route('transaksi.proses', $transaksi);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DtailTransaksi  $dtailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(DetailTransaksi $dtailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailTransaksi  $dtailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailTransaksi $dtailTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailTransaksi  $dtailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DtailTransaksi $dtailTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailTransaksi  $dtailTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailTransaksi $dtailTransaksi)
    {
        //
    }
}
