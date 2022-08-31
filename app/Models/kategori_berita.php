<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_berita extends Model
{
    use HasFactory;
    protected $table = 'kategori_berita';
    protected $fillable = [
        'nama_kategori', 'deskripsi'
    ];

    protected $primaryKey = 'id';
}
