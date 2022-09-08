<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GugurProjek extends Model
{
    use HasFactory;

    protected $guard = ['id'];

    public function projek()
    {
        return $this->belongsTo(Projek::class);
    }
}
