<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maal extends Model
{
    use HasFactory;
    public function masjid()
    {
        return $this->belongsTo(mesjid::class, 'masjid_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function zakat()
    {
        return $this->belongsTo(zakat::class);
    }
    protected $table = 'zakat_maal';
    public $timestamps = false;
    protected $fillable = [
        'Nama_pembayar',
        'Tanggal_pembayaran',
        'No_Hp',
        'zakat_id',
        'masjid_id',
        'Alamat',
        'Pembayaran_Uang'
    ];
}
