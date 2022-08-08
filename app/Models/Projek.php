<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    public function status_projek()
    {
        return $this->hasOne(StatusProjek::class);
    }

    public function sijil()
    {
        return $this->hasOne(Sijil::class);
    }
}
