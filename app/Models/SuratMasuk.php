<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'suratmasuk';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'penerima');
    }

    public function nomorsurat()
    {
        return $this->belongsTo(NomorSurat::class, 'nomorsurat_id');
    }
}
