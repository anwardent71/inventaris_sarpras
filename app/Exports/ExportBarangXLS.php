<?php

namespace App\Exports;

use App\Models\Barang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportBarangXLS implements FromView
{
    public function view(): View
    {
        return view('cetak.BarangXLS', [
            'barang' => Barang::all()
        ]);
    }
}