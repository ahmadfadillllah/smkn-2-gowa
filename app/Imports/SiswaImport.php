<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class SiswaImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            Siswa::create([
                'kelas_id' => $row[0],
                'nis' => $row[1],
                'nisn' => $row[2],
                'nama_siswa' => $row[3],
                'nama_panggilan' => $row[4],
            ]);
        }
    }
}
