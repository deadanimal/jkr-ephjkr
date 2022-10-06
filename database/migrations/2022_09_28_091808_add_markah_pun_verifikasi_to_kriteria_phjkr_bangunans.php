<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahPunVerifikasiToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahTL1_MV_PUN')->nullable();
            $table->integer('markahTL2_MV_PUN')->nullable();
            $table->integer('markahTL3_MV_PUN')->nullable();
            $table->integer('markahTL32_MV_PUN')->nullable();
            $table->integer('markahTL4_MV_PUN')->nullable();
            $table->integer('markahTL5_MV_PUN')->nullable();
            $table->integer('markahTL6_MV_PUN')->nullable();
            $table->integer('markahTL7_MV_PUN')->nullable();
            $table->integer('markahTL8_MV_PUN')->nullable();
            $table->integer('markahTL81_MV_PUN')->nullable();
            $table->integer('markahTL82_MV_PUN')->nullable();
            $table->integer('markahTL83_MV_PUN')->nullable();
            $table->integer('markahTL84_MV_PUN')->nullable();
            $table->integer('markahTL85_MV_PUN')->nullable();
            $table->integer('markahTL9_MV_PUN')->nullable();
            $table->integer('markahTL91_MV_PUN')->nullable();
            $table->integer('markahTL92_MV_PUN')->nullable();
            $table->integer('markahTL10_MV_PUN')->nullable();

            $table->integer('markahKT1_MV_PUN')->nullable();
            $table->integer('markahKT2_MV_PUN')->nullable();
            $table->integer('markahKT21_MV_PUN')->nullable();
            $table->integer('markahKT22_MV_PUN')->nullable();
            $table->integer('markahKT3_MV_PUN')->nullable();
            $table->integer('markahKT31_MV_PUN')->nullable();
            $table->integer('markahKT32_MV_PUN')->nullable();
            $table->integer('markahKT4_MV_PUN')->nullable();
            $table->integer('markahKT5_MV_PUN')->nullable();
            $table->integer('markahKT51_MV_PUN')->nullable();
            $table->integer('markahKT52_MV_PUN')->nullable();
            $table->integer('markahKT53_MV_PUN')->nullable();
            $table->integer('markahKT6_MV_PUN')->nullable();
            $table->integer('markahKT61_MV_PUN')->nullable();
            $table->integer('markahKT62_MV_PUN')->nullable();
            $table->integer('markahKT7_MV_PUN')->nullable();
            $table->integer('markahKT8_MV_PUN')->nullable();
            $table->integer('markahKT9_MV_PUN')->nullable();
            $table->integer('markahKT10_MV_PUN')->nullable();
            $table->integer('markahKT101_MV_PUN')->nullable();
            $table->integer('markahKT102_MV_PUN')->nullable();
            $table->integer('markahKT103_MV_PUN')->nullable();
            $table->integer('markahKT11_MV_PUN')->nullable();

            $table->integer('markahSB1_MV_PUN')->nullable();
            $table->integer('markahSB2_MV_PUN')->nullable();
            $table->integer('markahSB3_MV_PUN')->nullable();
            $table->integer('markahSB4_MV_PUN')->nullable();

            $table->integer('markahPA1_MV_PUN')->nullable();
            $table->integer('markahPA2_MV_PUN')->nullable();
            $table->integer('markahPA3_MV_PUN')->nullable();
            $table->integer('markahPA32_MV_PUN')->nullable();
            $table->integer('markahPA4_MV_PUN')->nullable();
            $table->integer('markahPA5_MV_PUN')->nullable();

            $table->integer('markahPD1_MV_PUN')->nullable();
            $table->integer('markahPD2_MV_PUN')->nullable();
            $table->integer('markahPD21_MV_PUN')->nullable();
            $table->integer('markahPD22_MV_PUN')->nullable();
            $table->integer('markahPD23_MV_PUN')->nullable();
            $table->integer('markahPD24_MV_PUN')->nullable();
            $table->integer('markahPD25_MV_PUN')->nullable();
            $table->integer('markahPD3_MV_PUN')->nullable();
            $table->integer('markahPD31_MV_PUN')->nullable();
            $table->integer('markahPD32_MV_PUN')->nullable();
            $table->integer('markahPD33_MV_PUN')->nullable();
            $table->integer('markahPD34_MV_PUN')->nullable();
            $table->integer('markahPD35_MV_PUN')->nullable();
            $table->integer('markahPD4_MV_PUN')->nullable();
            $table->integer('markahPD41_MV_PUN')->nullable();
            $table->integer('markahPD42_MV_PUN')->nullable();
            $table->integer('markahPD5_MV_PUN')->nullable();
            $table->integer('markahPD51_MV_PUN')->nullable();
            $table->integer('markahPD52_MV_PUN')->nullable();
            $table->integer('markahPD6_MV_PUN')->nullable();
            $table->integer('markahPD61_MV_PUN')->nullable();
            $table->integer('markahPD62_MV_PUN')->nullable();
            $table->integer('markahPD7_MV_PUN')->nullable();
            $table->integer('markahPD8_MV_PUN')->nullable();
            $table->integer('markahPD9_MV_PUN')->nullable();
            $table->integer('markahPD10_MV_PUN')->nullable();

            $table->integer('markahFL1_MV_PUN')->nullable();
            $table->integer('markahFL2_MV_PUN')->nullable();
            $table->integer('markahFL21_MV_PUN')->nullable();
            $table->integer('markahFL22_MV_PUN')->nullable();
            $table->integer('markahFL23_MV_PUN')->nullable();
            $table->integer('markahFL3_MV_PUN')->nullable();
            $table->integer('markahFL31_MV_PUN')->nullable();
            $table->integer('markahFL32_MV_PUN')->nullable();
            $table->integer('markahFL33_MV_PUN')->nullable();
            $table->integer('markahFL34_MV_PUN')->nullable();
        
            $table->integer('markahIN1_MV_PUN')->nullable();

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
