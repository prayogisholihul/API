<?php

namespace App\Http\Controllers;

use App\Models\refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return refund::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $refund = new refund;
        $refund->Jumlah_barang = $request->Jumlah_barang;
        $refund->Alasan_refund_dan_tukar =$request->Alasan_refund_dan_tukar;

        $refund->save();

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
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function show(refund $refund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function edit(refund $refund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Jumlah_barang = $request->Jumlah_barang;
        $Alasan_refund_dan_tukar =$request->Alasan_refund_dan_tukar;

        $refund = refund::find($id);

        $refund->Jumlah_barang = $Jumlah_barang;
        $refund->Alasan_refund_dan_tukar =$Alasan_refund_dan_tukar;
        $refund->save();

        return 'Data has been updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refund = refund::find($id);
        $refund->delete();

        return 'Data has been deleted';
    }
}
