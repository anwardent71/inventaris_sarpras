<?php

namespace App\Exports;

use App\Models\Ruang;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportExcelRuang implements
    ShouldAutoSize,
    WithMapping,
    WithHeadings,
    WithStyles,
    WithDrawings,
    WithEvents,
    FromCollection,
    WithCustomStartCell
{
    use Exportable;

    public function collection()
    {
        return Ruang::all();
    }

    public function map($ruang): array
    {
        return [
            $ruang->id,
            $ruang->nama_ruang,
            $ruang->luas_ruang,
            $ruang->no_registrasi
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama Ruang',
            'Luas Ruang',
            'No Regis'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getHighestRow();
                $event->sheet->getDelegate()->getColumnDimension('A')->setAutoSize(false)->setWidth(8);
                $event->sheet->getStyle('A8:D8')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            }
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B3:D3')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('B4:D4')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('B5:D5')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('A8:D100')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );

        $sheet->mergeCells('B3:D3');
        $sheet->mergeCells('B4:D4');
        $sheet->mergeCells('B5:D5');

        $sheet->setCellValue('B3', 'DAFTAR INVENTARISASI SARANA PRASARANA');
        $sheet->setCellValue('B4', 'SMK TARUNA BHAKTI');
        $sheet->setCellValue('B5', 'TAHUN PELAJARAN 2020-2021');

        return [

            'B3:B5' => ['font' => ['bold' => true, 'size' => 16]],
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo SMK Taruna Bhakti');
        $drawing->setPath(public_path('/tb.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B3');

        return $drawing;
    }

    public function startCell(): string
    {
        return 'A8';
    }
}