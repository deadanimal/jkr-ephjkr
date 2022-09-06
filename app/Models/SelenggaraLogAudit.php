<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelenggaraLogAudit extends Model
{
    use HasFactory;

    public $table = 'users';

    protected $guarded = ['id'];
}
