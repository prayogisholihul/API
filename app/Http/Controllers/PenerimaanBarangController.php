<?php

namespace App\Http\Controllers;

use App\Models\penerimaan_barang;
use Illuminate\Http\Request;

class PenerimaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return penerimaan_barang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $receive = new penerimaan_barang;
        $receive->status_barang = $request->status_barang;

        $receive->save();

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
     * @param  \App\Models\penerimaan_barang  $penerimaan_barang
     * @return \Illuminate\Http\Response
     */
    public function show(penerimaan_barang $penerimaan_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penerimaan_barang  $penerimaan_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(penerimaan_barang $penerimaan_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penerimaan_barang  $penerimaan_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status_barang = $request->status_barang;

        $receive = penerimaan_barang::find($id);

        $receive->status_barang = $status_barang;

        $receive->save();

        return 'Data has been updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penerimaan_barang  $penerimaan_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receive = penerimaan_barang::find($id);

        $receive->delete();

        return 'Data has been deleted';
    }
}
