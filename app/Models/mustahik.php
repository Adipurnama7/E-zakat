<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahik extends Model
{
    use HasFactory;
    public function mustahik()
    {
        return $this->belongsTo(mustahik::class);
    }
    protected $table = 'mustahik';
    public $timestamps = false;
    protected $fillable = [
        'Nama_Penerima',
        'Alamat_Penerima',
        'Kategori'

    ];
}
