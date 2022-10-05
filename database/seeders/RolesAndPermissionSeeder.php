<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
        Role::create(['name' => 'Pengguna']);;
        Role::create(['name' => 'Pengurusan Atasan']);
        Role::create(['name' => 'Pentadbir']);
        Role::create(['name' => 'Ketua Pasukan']);
        Role::create(['name' => 'Penolong Ketua Pasukan']);
        Role::create(['name' => 'Sekretariat']);
        Role::create(['name' => 'Pemudah Cara 1']); // (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)
        Role::create(['name' => 'Pemudah Cara 2']);  // (bagi pHJKR Jalan)
        Role::create(['name' => 'Ketua Penilai']);
        Role::create(['name' => 'Penilai Jalan ']);  // (bagi pHJKR Jalan)
        Role::create(['name' => 'Penilai GPSS']);
        Role::create(['name' => 'Ketua Validasi']);  // (bagi pHJKR Bangunan)
        Role::create(['name' => 'Pasukan Validasi']);  // (bagi pHJKR Bangunan)

        $user1 = User::find(1);
        $user1->assignRole('Pengguna');

        $user2 = User::find(2);
        $user2->assignRole('Pengurusan Atasan');

        $user3 = User::find(3);
        $user3->assignRole('Pentadbir');

        $user4 = User::find(4);
        $user4->assignRole('Ketua Pasukan');

        $user5 = User::find(5);
        $user5->assignRole('Penolong Ketua Pasukan');

        $user6 = User::find(6);
        $user6->assignRole('Sekretariat');

        $user7 = User::find(7);
        $user7->assignRole('Pemudah Cara 1');

        $user8 = User::find(8);
        $user8->assignRole('Pemudah Cara 2');

        $user9 = User::find(9);
        $user9->assignRole('Ketua Penilai');

        $user10 = User::find(10);
        $user10->assignRole('Penilai Jalan');

        $user11 = User::find(11);
        $user11->assignRole('Penilai GPSS');

        $user12 = User::find(12);
        $user12->assignRole('Ketua Validasi');

        $user13 = User::find(13);
        $user13->assignRole('Pasukan Validasi');

    
    }
}
