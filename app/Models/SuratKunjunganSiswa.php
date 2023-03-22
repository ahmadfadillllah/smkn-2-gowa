<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKunjunganSiswa extends Model
{
    use HasFactory;

    protected $table = 'suratkunjungansiswa';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nomorsurat()
    {
        return $this->belongsTo(NomorSurat::class, 'nomorsurat_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
