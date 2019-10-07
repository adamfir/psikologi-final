<?php

namespace App\Exports;

use App\Recall;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class RecallExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Recall::all();
    }

    
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Hasil Recall';
    }

    public function headings(): array
    {
        return [
            'No',
            'Id User',
            'Seri',
            'Iterasi',
            'Kategori Tes',
            'Jumlah Benar',
            'Jumlah Salah',
            'Waktu Yang Dibutuhkan',
            'Jenis Recall',
            'Created Date',
            'Updated Date'
        ];
    }
}
