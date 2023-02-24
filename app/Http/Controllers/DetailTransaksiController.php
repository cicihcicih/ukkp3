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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'id_paket'  => 'required',
            'qty'       => 'required'
        ],
        [
            'id_paket.required' => 'Pilih Paket',
            'qty.required'      => 'Isi Qty'
        ]);

        $detailTransaksi = new DetailTransaksi;
        $detailTransaksi->transaksi_id  = $transaksi;
        $detailTransaksi->paket_id      = $request->id_paket;
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
