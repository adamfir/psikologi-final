<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SheetExportRyan implements WithMultipleSheets
{
    use Exportable;
    
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        $sheets[0] = new UsersExport();
        $sheets[1] = new ArraySpanTaskExports();
        $sheets[2] = new MoodQuizsExport();
        $sheets[3] = new PerthEmotionalExport();
        return $sheets;
    }
}