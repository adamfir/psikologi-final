<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SheetExport implements WithMultipleSheets
{
    use Exportable;
    
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        $sheets[0] = new UsersExport();
        $sheets[1] = new RecallExport();
        $sheets[2] = new JawabanPernyataanExport();
        return $sheets;
    }
}
