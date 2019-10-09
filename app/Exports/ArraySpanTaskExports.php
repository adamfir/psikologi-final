<?php

namespace App\Exports;

use App\arraySpanTaskAns;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class ArraySpanTaskExports implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return arraySpanTaskAns::all();
    }

    
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Array Span Task';
    }

    public function headings(): array
    {
        return [
            'No',
            'Id User',
            'Seri',
            'Iterasi',
            'Question',
            'Forward',
            'Backward',
            'Waktu',
            'Kategori Tes',
            'Created Date',
            'Updated Date'
        ];
    }
}
