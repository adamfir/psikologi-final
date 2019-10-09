<?php

namespace App\Exports;

use App\JawabanPernyataan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class JawabanPernyataanExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return JawabanPernyataan::all();
    }

    
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Jawaban Pertanyaan';
    }

    public function headings(): array
    {
        return [
            'No',
            'Id User',
            'Seri',
            'Iterasi',
            'Kategori Tes',
            'Hasil',
            'Waktu Tersisa',
            'Created Date',
            'Updated Date'
        ];
    }
}
