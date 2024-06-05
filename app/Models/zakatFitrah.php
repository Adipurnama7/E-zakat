<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zakatFitrah extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function masjid()
    {
        return $this->belongsTo(mesjid::class, 'masjid_id');
    }
    public function zakat()
    {
        return $this->belongsTo(zakat::class);
    }
    protected $table = 'zakat_fitrah';
    public $timestamps = false;
    protected $fillable = [
        'Nama_pembayar',
        'Tanggal_pembayaran',
        'No_Hp',
        'Alamat',
        'zakat_id',
        'masjid_id',
        'Jumlah_Tanggungan',
        'Pembayaran_Beras',
        'Pembayaran_Uang',
        'Total_Pembayaran',
        'user_id'
    ];
}