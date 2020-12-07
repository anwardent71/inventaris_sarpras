<?php

namespace App\Exports;

use App\Models\Barang;
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

class ExportExcelBarangByRuang implements
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
    
    protected $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function collection()
    {
        return Barang::where('id_ruang', $this->id)->get();
    }

    public function map($barang): array
    {
        return [
            $barang->id,
            $barang->nama_barang,
            $barang->spesifikasi,
            $barang->jumlah,
            $barang->baik,
            $barang->rusak_ringan,
            $barang->rusak_berat,
            $barang->keterangan,
            $barang->id_ruang
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Barang',
            'Spesifikasi',
            'Jumlah',
            'Baik',
            'Rusak Ringan',
            'Rusak Berat',
            'Keterangan',
            'Ruang'
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
                $event->sheet->getStyle('A8:I8')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            }
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('C3:H3')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('C4:H4')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('C5:H5')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );
        $sheet->getStyle('A8:H100')->getAlignment()->applyFromArray(
            array('horizontal' => 'center') 
        );

        $sheet->mergeCells('C3:H3');
        $sheet->mergeCells('C4:H4');
        $sheet->mergeCells('C5:H5');

        $sheet->setCellValue('C3', 'DAFTAR INVENTARISASI SARANA PRASARANA');
        $sheet->setCellValue('C4', 'SMK TARUNA BHAKTI');
        $sheet->setCellValue('C5', 'TAHUN PELAJARAN 2020-2021');

        return [

            'C3:C5' => ['font' => ['bold' => true, 'size' => 16]],
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