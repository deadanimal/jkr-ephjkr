<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sijil extends Model
{
    use HasFactory;

    public function projek()
    {
        return $this->belongsTo(Projek::class);
    }

    public function peringkat()
    {
        return $this->belongsTo(Peringkat::class);
    }
}
