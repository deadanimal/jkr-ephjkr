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
        Role::create(['name' => 'Pengguna']);
        Role::create(['name' => 'Pengurusan Atasan']);
        Role::create(['name' => 'Pentadbir']);
        Role::create(['name' => 'Ketua Pasukan']);
        Role::create(['name' => 'Penolong Ketua Pasukan']);
        Role::create(['name' => 'Sekretariat']);
        Role::create(['name' => 'Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)']);
        Role::create(['name' => 'Pemudah Cara (bagi pHJKR Jalan)']);
        Role::create(['name' => 'Ketua Penilai']);
        Role::create(['name' => 'Penilai Jalan (bagi pHJKR Jalan)']);
        Role::create(['name' => 'Penilai GPSS']);
        Role::create(['name' => 'Ketua Validasi (bagi pHJKR Bangunan)']);
        Role::create(['name' => 'Pasukan Validasi (bagi pHJKR Bangunan)']);
    }
}
