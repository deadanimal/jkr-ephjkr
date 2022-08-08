<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaGpssBangunan extends Model
{
    use HasFactory;

    public function penilaian_ephjkr()
    {
        return $this->belongsTo(PenilaianEphjkr::class);
    }
}
