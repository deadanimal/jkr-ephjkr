<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasOne(StatusProjek::class);
    }

    public function sijil()
    {
        return $this->hasOne(Sijil::class);
    }

    public function PemudahCara()
    {
        return $this->hasOne(PemudahCara::class);
    }
}
