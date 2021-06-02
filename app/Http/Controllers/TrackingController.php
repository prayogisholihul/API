<?php

namespace App\Http\Controllers;

use App\Models\tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tracking::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tracking = new tracking;
        $tracking->update_lokasi = $request->update_lokasi;
       
        $tracking->save();

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
     * @param  \App\Models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_lokasi = $request->update_lokasi;
        
        $tracking = tracking::find($id);

        $tracking->update_lokasi = $update_lokasi;
        $tracking->save();

        return 'Data has been updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tracking = tracking::find($id);

        $tracking->delete();

        return 'Data has been deleted';
    }
}
