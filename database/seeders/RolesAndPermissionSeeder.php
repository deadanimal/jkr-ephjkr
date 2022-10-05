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
<<<<<<< HEAD


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

        // create permissions
    //     Permission::create(['name' => 'paparan senarai projek']);
    //     Permission::create(['name' => 'melantik pemudah cara']);
    //     Permission::create(['name' => 'papar dan muat turun skor kad penilaian reka bentuk']);
    //     Permission::create(['name' => 'penilaian reka bentuk']);

    //     $gpss_bangunan_KP = Role::create(['name' => 'Ketua Pasukan'])
    //     ->givePermissionTo([
    //         'paparan senarai projek',
    //         'melantik pemudah cara',
    //         'papar dan muat turun skor kad penilaian reka bentuk'
    //     ]);

    //     $gpss_bangunan_PC = Role::create(['name' => 'Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)'])
    //     ->givePermissionTo([
    //         'paparan senarai projek',
    //         'penilaian reka bentuk',
    //         'jana keputusan'
    //     ]);
=======
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // // create permissions
        // Permission::create(['name' => 'paparan senarai projek reka bentuk']);
        // Permission::create(['name' => 'lantik pemudah cara']);
        // Permission::create(['name' => 'penilaian reka bentuk']);
        // Permission::create(['name' => 'pengesahan penilaian reka bentuk']);
        // Permission::create(['name' => 'semakan rawak dan jana sijil reka bentuk']);
        // Permission::create(['name' => 'katalog kursus']);
        // Permission::create(['name' => 'status permohonan']);
        // Permission::create(['name' => 'kehadiran']);
        // Permission::create(['name' => 'pelajar praktikal']);
        // Permission::create(['name' => 'pengajian lanjutan']);
        // Permission::create(['name' => 'jawab penilaian']);
        // Permission::create(['name' => 'cipta penilaian']);
        // Permission::create(['name' => 'laporan']);
        // Permission::create(['name' => 'audit trail']);
        // Permission::create(['name' => 'perbelanjaan']);

        // $penilaianRekaBentukBangunan = Role::create(['name' => 'Ketua Pasukan'])
        //     ->givePermissionTo([
        //         'paparan senarai projek reka bentuk',
        //         'papar dan muat turun sijil penilaian reka bentuk',
        //     ]);

        // Role::create(['name' => 'Pengguna']);
        // Role::create(['name' => 'Pengurusan Atasan']);
        // Role::create(['name' => 'Pentadbir']);
        // // Role::create(['name' => 'Ketua Pasukan']);
        // Role::create(['name' => 'Penolong Ketua Pasukan']);
        // Role::create(['name' => 'Sekretariat']);
        // Role::create(['name' => 'Pemudah Cara (bagi PHJKR Bangunan & GPSS Bangunan dan Jalan)']);
        // Role::create(['name' => 'Pemudah Cara (bagi pHJKR Jalan)']);
        // Role::create(['name' => 'Ketua Penilai']);
        // Role::create(['name' => 'Penilai Jalan (bagi pHJKR Jalan)']);
        // Role::create(['name' => 'Penilai GPSS']);
        // Role::create(['name' => 'Ketua Validasi (bagi pHJKR Bangunan)']);
        // Role::create(['name' => 'Pasukan Validasi (bagi pHJKR Bangunan)']);


        

        // $pentadbiranSistemUlpk = Role::create(['name' => 'Pentadbiran Sistem ULPK'])
        //     ->givePermissionTo([
        //         'audit trail',
        //         'pengurusan pengguna',
        //         'utiliti'
        //     ]);

        // $urusSetiaUls = Role::create(['name' => 'Urus Setia ULS'])
        //     ->givePermissionTo([
        //         'pengurusan kursus',
        //         'pencalonan peserta',
        //         'semakan permohonan',
        //         'cipta penilaian',
        //         'jawab penilaian',
        //         'kehadiran',
        //         'perbelanjaan',
        //         'laporan',
        //         'utiliti',
        //         'pengajian lanjutan'
        //     ]);

        // $urusSetiaUlpk = Role::create(['name' => 'Urus Setia ULPK'])
        //     ->givePermissionTo([
        //         'pengurusan kursus',
        //         'pencalonan peserta',
        //         'semakan permohonan',
        //         'cipta penilaian',
        //         'jawab penilaian',
        //         'kehadiran',
        //         'perbelanjaan',
        //         'laporan',
        //         'utiliti'
        //     ]);

        // $penyelarasPesertaUls = Role::create(['name' => 'Penyelaras Peserta ULS'])
        //     ->givePermissionTo([
        //         'pencalonan peserta',
        //         'laporan',
        //         'pelajar praktikal'
        //     ]);

        // $penyelarasPesertaUlpk = Role::create(['name' => 'Penyelaras Peserta ULPK'])
        //     ->givePermissionTo([
        //         'pengurusan pengguna',
        //         'pencalonan peserta',
        //     ]);

        // $penyokongUls = Role::create(['name' => 'Penyokong ULS'])
        //     ->givePermissionTo([
        //         'semakan permohonan',
        //         'jawab penilaian'
        //     ]);

        // $penyeliaUls = Role::create(['name' => 'Penyelia ULS'])
        //     ->givePermissionTo([
        //         'jawab penilaian',
        //         'laporan'
        //     ]);

        // $bpsm = Role::create(['name' => 'Bahagian Pengurusan Sumber Manusia (Unit Perkhidmatan)'])
        //     ->givePermissionTo([
        //         'laporan'
        //     ]);

        // $pesertaUls = Role::create(['name' => 'Peserta ULS'])
        //     ->givePermissionTo([
        //         'jawab penilaian',
        //         'katalog kursus',
        //         'status permohonan',
        //         'kehadiran',
        //     ]);

        // $pesertaUlpk = Role::create(['name' => 'Peserta ULPK'])
        //     ->givePermissionTo([
        //         'jawab penilaian',
        //         'katalog kursus',
        //         'status permohonan',
        //         'kehadiran',
        //     ]);

        // $ejenPelaksanaUls = Role::create(['name' => 'Ejen Pelaksana ULS'])
        //     ->givePermissionTo([
        //         'laporan',
        //         'cipta penilaian'
        //     ]);

        // $ejenPelaksanaUlpk = Role::create(['name' => 'Ejen Pelaksana ULPK'])
        //     ->givePermissionTo([
        //         'laporan',
        //         'cipta penilaian',
        //         'kehadiran'
        //     ]);
>>>>>>> 902eea1 (RL-PenilaianRekaBentukBangunan-Controller)
    }
}
