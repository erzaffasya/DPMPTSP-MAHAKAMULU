<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag_berita extends Model
{
    use HasFactory;
    protected $table = 'tag_berita';
    protected $fillable = [
        'nama_tag'
    ];

    protected $primaryKey = 'id';
}
