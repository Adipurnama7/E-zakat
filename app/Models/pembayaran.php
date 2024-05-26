<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    public function zakat()
    {
        return $this->belongsTo(zakat::class);
    }
    // Pembayaran.php (Model)
    public function masjid()
    {
        return $this->belongsTo(mesjid::class, 'masjid_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
    protected $table = 'pembayaran';
    protected $fillable = [
        'Nama_pembayar',
        'Tanggal_pembayaran',
        'No_Hp',
        'Alamat',
        'zakat_id',
        'Jumlah_Tanggungan',
        'Pembayaran_Beras',
        'Pembayaran_Uang',
        'Uang_Yang_Dibayar',
        "Total_Pembayaran",
        'user_id'

    ];
}
