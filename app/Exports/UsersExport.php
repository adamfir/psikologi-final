<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'User';
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nama',
            'Email',
            'Jenis User',
            'Created Date',
            'Updated Date'
        ];
    }
}
