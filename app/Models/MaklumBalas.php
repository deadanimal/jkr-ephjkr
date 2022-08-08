<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumBalas extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(User::class);
    }
}
