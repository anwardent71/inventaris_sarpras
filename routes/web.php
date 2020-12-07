<?php

use App\Http\Controllers\CetakController;
use App\Http\Controllers\DataBarang;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('overview');
});

//Get Barang by ID Ruang
Route::get('/admin/ruangs/{id}/detail', [DataBarang::class, 'dataBarang']);

//Cetak PDF
Route::get('/admin/cetak/pdf/ruangs', [CetakController::class, 'cetakPDFRuang']);
Route::get('/admin/cetak/pdf/barangs', [CetakController::class, 'cetakPDFBarang']);
Route::get('/admin/cetak/pdf/barangs/{id}', [CetakController::class, 'cetakPDFBarangByRuang']);

//Cetak Excel
Route::get('/admin/cetak/excel/ruangs', [CetakController::class, 'cetakExcelRuang']);
Route::get('/admin/cetak/excel/barangs', [CetakController::class, 'cetakExcelBarang']);
Route::get('/admin/cetak/excel/barangs/{id}', [CetakController::class, 'cetakExcelBarangByRuang']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
