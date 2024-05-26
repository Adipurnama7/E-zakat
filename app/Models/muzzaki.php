<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muzzaki extends Model
{
    use HasFactory;
    public function zakat()
    {
        return $this->belongsTo(zakat::class);
    }
}
