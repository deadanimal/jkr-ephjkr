<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'namaCawangan',
        'icPengguna',
        'namaSyarikat',
        'namaCawangan',
        'alamatSyarikat',
        'alamatCawangan',
        'daerah',
        'negeri',
        'notelbimbitPengguna',
        'notelPengguna',
        'nofaxPengguna',
        'email_verified_at',
        'sijilKompeten',
        'kelayakanAkademik',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hebahan()
    {
        return $this->hasMany(Hebahan::class);
    }

    public function maklum_balas()
    {
        return $this->hasMany(MaklumBalas::class);
    }

    public function audit_trail()
    {
        return $this->hasOne(AuditTrail::class);
    }
    public function log_audit()
    {
        return $this->hasMany(SelenggaraLogAudit::class);
    }

    public function faq()
    {
        return $this->hasMany(Faq::class);
    }

    public function manual_dan_standard()
    {
        return $this->hasMany(ManualDanStandard::class);
    }

    public function peranan_projek()
    {
        return $this->hasMany(PerananProjek::class);
    }
}
