<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyaluran extends Model
{
    use HasFactory;
    public function penyaluran()
    {
        return $this->belongsTo(mustahik::class);
    }
    protected $table = "penyaluran";
}
