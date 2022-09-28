<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelenggaraLogAudit extends Model
{
    use HasFactory;

    // public function penggunaa()
    // {
    //     return $this->belongsTo(User::class);
    // }

    //public $table = 'users';

    protected $guarded = ['id'];

    public function pengguna()
    {
        return $this->belongsTo(user::class, 'user_id','id');
    }

    // public function audit_trail()
    // {
    //     return $this->belongsTo(AuditTrail::class, 'user_id', 'id');
    // }
}
