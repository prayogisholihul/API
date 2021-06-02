<?php

namespace App\Http\Controllers;

use App\Models\pengiriman_barang;
use Illuminate\Http\Request;

class PengirimanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pengiriman_barang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $send = new pengiriman_barang;
        $send->id_pesanan = $request->id_pesanan;
        $send->jenis_ekspedisi = $request->jenis_ekspedisi;

        $send->save();

        return 'Data has been created';
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengiriman_barang  $pengiriman_barang
     * @return \Illuminate\Http\Response
     */
    public function show(pengiriman_barang $pengiriman_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengiriman_barang  $pengiriman_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(pengiriman_barang $pengiriman_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengiriman_barang  $pengiriman_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_pesanan = $request->id_pesanan;
        $jenis_ekspedisi =$request->jenis_ekspedisi;

        $send = pengiriman_barang::find($id);

        $send->id_pesanan = $id_pesanan;
        $send->jenis_ekspedisi =$jenis_ekspedisi;
        $send->save();

        return 'Data has been updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengiriman_barang  $pengiriman_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = pengiriman_barang::find($id);
        $send->delete();

        return 'Data has been deleted';
    }
}
