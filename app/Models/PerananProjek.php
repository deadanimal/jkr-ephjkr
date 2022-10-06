<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class PerananProjek extends Model
{
    use HasFactory;

    public function projek()
    {
        return $this->belongsTo(Projek::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(User::class);
    }

    public function peranan()
    {
        return $this->belongsTo(Role::class);
    }
}
