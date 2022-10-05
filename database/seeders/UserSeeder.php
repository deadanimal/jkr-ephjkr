<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pengguna')->insert([
            [
                'name'=> 'JKR Admin',
                'email'=> 'jkr-admin@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Pengurusan Atasan')->insert([
            [
                'name'=> 'JKR Pengurusan Atasan',
                'email'=> 'jkr-pengurusan-atasan@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Pentadbir')->insert([
            [
                'name'=> 'JKR Pentadbir',
                'email'=> 'jkr-pentadbir@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Ketua Pasukan')->insert([
            [
                'name'=> 'JKR Ketua Pasukan',
                'email'=> 'jkr-ketua-pasukan@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Penolong Ketua Pasukan')->insert([
            [
                'name'=> 'JKR Penolong Ketua Pasukan',
                'email'=> 'jkr-penolong-ketua-pasukan@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Sekretariat')->insert([
            [
                'name'=> 'JKR Sekretariat',
                'email'=> 'jkr-sekretariat@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Pemudah Cara 1')->insert([
            [
                'name'=> 'JKR Pemudah Cara 1',
                'email'=> 'jkr-pemudah-cara-1@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Pemudah Cara 2')->insert([
            [
                'name'=> 'JKR Pemudah Cara 2',
                'email'=> 'jkr-pemudah-cara-2@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Ketua Penilai')->insert([
            [
                'name'=> 'JKR Ketua Penilai',
                'email'=> 'jkr-ketua-penilai@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Penilai Jalan')->insert([
            [
                'name'=> 'JKR Penilai Jalan',
                'email'=> 'jkr-penilai-jalan@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Penilai GPSS')->insert([
            [
                'name'=> 'JKR Penilai GPSS',
                'email'=> 'jkr-penilai-GPSS@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Ketua Validasi')->insert([
            [
                'name'=> 'JKR Ketua Validasi',
                'email'=> 'jkr-ketua-validasi@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);

        DB::table('Pasukan Validasi')->insert([
            [
                'name'=> 'JKR Pasukan Validasi',
                'email'=> 'jkr-pasukan-validasi@pipeline.com.my',
                'password' => Hash::make('password')
            ],
        ]);
    }
}
