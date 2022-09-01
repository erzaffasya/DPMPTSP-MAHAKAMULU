<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileWebsite extends Model
{
    use HasFactory;
    protected $table = 'profile_website';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
