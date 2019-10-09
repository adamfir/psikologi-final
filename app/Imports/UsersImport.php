<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows){
        foreach ($rows as $key => $row) {
            if(User::where('email', '=', $row['email'])->first()){
                continue;
            }
            User::create([
                'name' => $row['name'],
                'email' => strtolower($row['email']),
                'password' => Hash::make(strtolower($row['email'])),
                'type' => $row['type'], 
            ]);
        }
    }
}
