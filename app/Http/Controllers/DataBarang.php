<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use \Barryvdh\DomPDF\Facade as PDF;
use \Maatwebsite\Excel\Facades\Excel;

class DataBarang extends Controller
{
    //Data Barang per Ruangan
    public function dataBarang($id) {
        $barangs = Barang::where('id_ruang', $id)->get();
        $ruang = $id;
        return view("DetailRuang", compact('barangs', 'ruang'));
    }
}
