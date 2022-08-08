<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianEphjkr extends Model
{
    use HasFactory;

    public function peringkat()
    {
        return $this->belongsTo(Peringkat::class);
    }

    public function kriteria_gpss_bangunan()
    {
        return $this->hasMany(KriteriaGpssBangunan::class);
    }

    public function kriteria_phjkr_bangunan()
    {
        return $this->hasMany(KriteriaPhjkrBangunan::class);
    }

    public function kriteria_gpss_jalan()
    {
        return $this->hasMany(KriteriaGpssJalan::class);
    }

    public function kriteria_phjkr_jalan()
    {
        return $this->hasMany(KriteriaPhjkrJalan::class);
    }
}
