<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class ProjekPemilihanAhli extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function projek()
    {
        return $this->belongsTo(Projek::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function peranan()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
