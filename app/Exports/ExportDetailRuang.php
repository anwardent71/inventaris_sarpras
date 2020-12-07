<?php

namespace App\Exports;

use App\Models\Barang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportDetailRuang implements FromView
{
    public function view(): View
    {
        return view('cetak.DetailRuangXLS', [
            'barang' => Ruang::all()
        ]);
    }
}