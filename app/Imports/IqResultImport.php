<?php

namespace App\Imports;

use App\IqResult;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IqResultImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows){
        foreach ($rows as $key => $row) {
            if(IqResult::where('email', '=', $row['email'])->first()){
                continue;
            }
            IqResult::create([
                'email' => strtolower($row['email']),
                'name' => $row['name'],
                'iq' => $row['iq'],
                'iq_category' => $row['iq_category'],
                'memory' => $row['memory'],
                'memory_category' => $row['memory_category'],
            ]);
        }
    }
}
