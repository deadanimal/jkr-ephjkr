<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUlasanVerifikasiPemarkahanBangunanToKriteriaPhjkrBangunans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kriteria_phjkr_bangunans', function (Blueprint $table) {
            //
            $table->integer('markahTL1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL32_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL4_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL5_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL6_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL7_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL8_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL81_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL82_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL83_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL84_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL85_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL9_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL91_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL92_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahTL10_ULASAN_VERIFIKASI')->nullable();

            $table->integer('markahKT1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT21_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT22_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT31_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT32_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT4_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT5_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT51_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT52_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT53_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT6_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT61_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT62_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT7_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT8_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT9_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT10_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT101_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT102_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT103_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahKT11_ULASAN_VERIFIKASI')->nullable();

            $table->integer('markahSB1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahSB2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahSB3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahSB4_ULASAN_VERIFIKASI')->nullable();

            $table->integer('markahPA1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPA2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPA3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPA32_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPA4_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPA5_ULASAN_VERIFIKASI')->nullable();

            $table->integer('markahPD1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD21_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD22_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD23_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD24_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD25_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD31_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD32_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD33_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD34_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD35_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD4_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD41_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD42_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD5_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD51_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD52_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD6_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD61_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD62_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD7_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD8_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD9_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahPD10_ULASAN_VERIFIKASI')->nullable();

            $table->integer('markahFL1_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL2_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL21_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL22_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL23_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL3_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL31_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL32_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL33_ULASAN_VERIFIKASI')->nullable();
            $table->integer('markahFL34_ULASAN_VERIFIKASI')->nullable();
        
            $table->integer('markahIN1_ULASAN_VERIFIKASI')->nullable();
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kriteria_phjkr_bangunans', function (Blueprint $table) {
            //
        });
    }
}
