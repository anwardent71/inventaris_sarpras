<?php

namespace App\Exports;

use App\Models\Ruang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportExcel implements FromView
{
    public function view(): View
    {
        return view('cetak.RuangPDF', [
            'ruang' => Ruang::all()
        ]);
    }
}