<?php

namespace App\Http\Controllers;

use App\Models\pengadaan_barang;
use Illuminate\Http\Request;

class PengadaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pengadaan_barang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $procurement = new pengadaan_barang;
        $procurement->id_vendor_list = $request->id_vendor_list;
        $procurement->id_pesan_barang = $request->id_pesan_barang;
        $procurement->status_barang = $request->status_barang;

        $procurement->save();

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
     * @param  \App\Models\pengadaan_barang  $pengadaan_barang
     * @return \Illuminate\Http\Response
     */
    public function show(pengadaan_barang $pengadaan_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengadaan_barang  $pengadaan_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(pengadaan_barang $pengadaan_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengadaan_barang  $pengadaan_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_vendor_list = $request->id_vendor_list;
        $id_pesan_barang = $request->id_pesan_barang;
        $status_barang = $request->status_barang;

        $procurement = pengadaan_barang::find($id);

        $procurement->id_vendor_list = $id_vendor_list;
        $procurement->id_pesan_barang = $id_pesan_barang;
        $procurement->status_barang = $status_barang;

        $procurement->save();

        return 'Data has been updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengadaan_barang  $pengadaan_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procurement = pengadaan_barang::find($id);
        $procurement->delete();

        return 'Data has been deleted';
    }
}
