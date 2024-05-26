<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;
    protected $table = 'donasi';
    public $timestamps = false;
    protected $fillable = [
        'Tanggal_Donasi',
        'Nama_Donatur',
        'No_Hp',
        'Alamat',
        'Total_Donasi',
        'Bukti_Donasi',
        'Status_Validasi',
    ];
}
