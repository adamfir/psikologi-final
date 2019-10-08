<?php

namespace App\Exports;

use App\moodQuizs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class MoodQuizsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return moodQuizs::all();
    }

    
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Mood Quiz';
    }

    public function headings(): array
    {
        return [
            'No',
            'Id User',
            'q10',
            'q11',
            'q20',
            'q21',
            'q30',
            'q31',
            'q40',
            'q41',
            'q50',
            'q51',
            'q60',
            'q61',
            'q70',
            'q71',
            'q80',
            'q81',
            'q90',
            'q91',
            'q100',
            'q101',
            'q110',
            'q111',
            'q120',
            'q121',
            'q130',
            'q131',
            'q140',
            'q141',
            'q150',
            'q151',
            'q160',
            'q161',
            'q170',
            'q171',
            'q180',
            'q181',
            'q190',
            'q191',
            'q200',
            'q201',
            'q210',
            'q211',
            'q220',
            'q221',
            'q230',
            'q231',
            'q240',
            'q241',
            'q250',
            'q251',
            'q260',
            'q261',
            'q270',
            'q271',
            'q280',
            'q281',
            'Created Date',
            'Updated Date'
        ];
    }
}
