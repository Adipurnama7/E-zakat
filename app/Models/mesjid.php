<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesjid extends Model

{

    use HasFactory;
    protected $table = 'masjid';
    public $timestamps = false;
    protected $fillable = [
        'Nama_Masjid',
        'Alamat',
        'RT',
        'RW',
    ];
}
