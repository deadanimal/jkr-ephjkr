<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(User::class);
    }

    public function log_audit()
    {
        return $this->hasMany(SelenggaraLogAudit::class);
    }
}
