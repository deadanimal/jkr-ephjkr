<?php

namespace App\Models;

use App\Http\Controllers\GugurProjekController;
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

    public function ahli()
    {
        return $this->hasMany(ProjekPemilihanAhli::class);
    }

    public function gugur()
    {
        return $this->hasMany(GugurProjekController::class);
    }

    public function pengesahan()
    {
        return $this->hasMany(PengesahanPendaftaranProjek::class);
    }
}
