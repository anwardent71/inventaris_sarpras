<?php

namespace App\Exports;

use App\Models\Ruang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportRuangXLS implements FromView
{
    public function view(): View
    {
        return view('cetak.RuangXLS', [
            'ruang' => Ruang::all()
        ]);
    }
}