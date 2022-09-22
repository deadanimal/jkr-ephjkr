<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasukanValidasi extends Model
{
    use HasFactory;

    public function Projek()
    {
        return $this->belongsTo(Projek::class);
    }
}
