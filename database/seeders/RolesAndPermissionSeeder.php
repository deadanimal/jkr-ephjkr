<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Permission::create(['name' => 'Dashboard']);
        Permission::create(['name' => 'faq']);
        Permission::create(['name' => 'hebahan']);
        Permission::create(['name' => 'maklum balas']);
        Permission::create(['name' => 'manual dan standard']);
        Permission::create(['name' => 'pendaftaran projek']);
        Permission::create(['name' => 'kriteria penilaian']);
        Permission::create(['name' => 'selenggara (log audit)']);
        Permission::create(['name' => 'selenggara (hebahan)']);
        Permission::create(['name' => 'selenggara (peranan)']);
        Permission::create(['name' => 'selenggara (status)']);
        Permission::create(['name' => 'selenggara (status maklum balas)']);
        Permission::create(['name' => 'senarai pengguna']);



        $ketuapasukan = Role::create(['name' => 'Ketua Pasukan'])
            ->givePermissionTo(Permission::all());

        $pengguna = Role::create(['name' => 'Pengguna'])
            ->givePermissionTo(Permission::all());

        
        // Role::create(['name' => 'Pengguna']);
        // Role::create(['name' => 'Pengurusan Atasan']);
        // Role::create(['name' => 'Pentadbir']);
        // Role::create(['name' => 'Ketua Pasukan']);
        // Role::create(['name' => 'Penolong Ketua Pasukan']);
        // Role::create(['name' => 'Sekretariat']);
        // Role::create(['name' => 'Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)']);
        // Role::create(['name' => 'Pemudah Cara (bagi pHJKR Jalan)']);
        // Role::create(['name' => 'Ketua Penilai']);
        // Role::create(['name' => 'Penilai Jalan (bagi pHJKR Jalan)']);
        // Role::create(['name' => 'Penilai GPSS']);
        // Role::create(['name' => 'Ketua Validasi (bagi pHJKR Bangunan)']);
        // Role::create(['name' => 'Pasukan Validasi (bagi pHJKR Bangunan)']);
    }
}
