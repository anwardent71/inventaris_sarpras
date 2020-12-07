<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\Barang;
use App\Exports\ExportExcelRuang;
use App\Exports\ExportExcelBarang;
use App\Exports\ExportExcelBarangByRuang;
use \Barryvdh\DomPDF\Facade as PDF;
use \Maatwebsite\Excel\Facades\Excel;

class CetakController extends Controller
{ 

    //R U A N G
    public function showRuang() {
        $ruang = Ruang::all();
        return view('cetak/RuangPDF', compact('ruang'));
    }

    public function showRuangXLS() {
        $ruang = Ruang::all();
        return view('cetak/RuangXLS', compact('ruang'));
    }

    public function cetakPDFRuang() {
        $ruang = Ruang::all();

        view()->share('ruang',$ruang);
        $pdf = PDF::loadView('cetak/RuangPDF', $ruang);

        return $pdf->download('Inventaris Sarpras (Ruang).pdf');
    }

    public function cetakExcelRuang() 
    {
        return Excel::download(new ExportExcelRuang, 'Inventaris Sarpras (Ruang).xlsx');
    }    

    // B A R A N G
    public function showBarang() {
        $barang = Barang::all();
        return view('cetak/BarangPDF', compact('barang'));
    }

    public function cetakPDFBarang() {
        $barang = Barang::all();

        view()->share('barang',$barang);
        $pdf = PDF::loadView('cetak/BarangPDF', $barang);

        return $pdf->download('Inventaris Sarpras (Barang).pdf');
    }

    public function cetakExcelBarang() 
    {
        return Excel::download(new ExportExcelBarang, 'Inventaris Sarpras (Barang).xlsx');
    }   

    //B A R A N G P E R R U A N G
    public function cetakPDFBarangbyRuang($id) {
        $barang = Barang::where('id_ruang', $id)->get();

        view()->share('barang',$barang);
        $pdf = PDF::loadView('cetak/BarangByRuangPDF', $barang);

        return $pdf->download('Inventaris Sarpras (Barang).pdf');
    }

    public function cetakExcelBarangbyRuang($id) 
    {
        return Excel::download(new ExportExcelBarangByRuang($id), 'Inventaris Sarpras (Barang).xlsx');
    }   
}
