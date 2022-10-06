<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringkat extends Model
{
    use HasFactory;

    public function penilaian_ephjkr()
    {
        return $this->hasMany(PenilaianEphjkr::class);
    }

    public function sijil()
    {
        return $this->hasMany(Sijil::class);
    }
    
}
