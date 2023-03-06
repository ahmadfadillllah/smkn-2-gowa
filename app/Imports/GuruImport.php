<?php

namespace App\Imports;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'email'    => $row[1],
            'name'     => $row[2],
            'password' => Hash::make($row[3]),
            'no_hp'     => $row[5],
            'role'     => 'guru',
            'avatar'     => 'user.png',
         ]);

         return new Guru([
            'user_id'     => $row[0],
            'nip'    => $row[0],
            'mata_pelajaran' => $row[4],
         ]);
    }
}
