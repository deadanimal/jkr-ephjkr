<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelenggaraKriteriaPenilaian extends Model
{
    use HasFactory;

    public $table = 'penilaian_ephjkrs';

    protected $guarded = ['id'];
}
