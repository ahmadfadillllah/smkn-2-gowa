<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';

    protected $fillable = [
        'kategoriberita_id',
        'judul',
        'slug',
        'isi'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategoriberita_id');
    }
}
