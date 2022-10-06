<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProjek extends Model
{
    use HasFactory;

    public function projek()
    {
        return $this->belongsTo(Projek::class);
    }
}
