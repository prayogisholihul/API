<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\PengirimanBarangController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PengadaanBarangController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//refund
Route::get('refund', [RefundController::class, 'index']);
Route::post('refund',[RefundController::class,'create']);
Route::put('/refund/{id}',[RefundController::class,'update']);
Route::delete('/refund/{id}',[RefundController::class,'destroy']);


//pengiriman barang
Route::get('send', [PengirimanBarangController::class, 'index']);
Route::post('send',[PengirimanBarangController::class,'create']);
Route::put('/send/{id}',[PengirimanBarangController::class,'update']);
Route::delete('/send/{id}',[PengirimanBarangController::class,'destroy']);

//tracking
Route::get('tracking', [TrackingController::class, 'index']);
Route::post('tracking',[TrackingController::class,'create']);
Route::put('/tracking/{id}',[TrackingController::class,'update']);
Route::delete('/tracking/{id}',[TrackingController::class,'destroy']);

//penerimaan barang
Route::get('receive', [PenerimaanBarangController::class, 'index']);
Route::post('receive',[PenerimaanBarangController::class,'create']);
Route::put('/receive/{id}',[PenerimaanBarangController::class,'update']);
Route::delete('/receive/{id}',[PenerimaanBarangController::class,'destroy']);

//pengadaan barang
Route::get('procurement', [PengadaanBarangController::class, 'index']);
Route::post('procurement',[PengadaanBarangController::class,'create']);
Route::put('/procurement/{id}',[PengadaanBarangController::class,'update']);
Route::delete('/procurement/{id}',[PengadaanBarangController::class,'destroy']);

