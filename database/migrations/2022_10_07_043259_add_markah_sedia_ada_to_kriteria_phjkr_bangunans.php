<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahSediaAdaToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahTL1_MMV_SEDIA')->nullable();
            $table->integer('markahTL2_MMV_SEDIA')->nullable();
            $table->integer('markahTL3_MMV_SEDIA')->nullable();
            $table->integer('markahTL32_MMV_SEDIA')->nullable();
            $table->integer('markahTL4_MMV_SEDIA')->nullable();
            $table->integer('markahTL5_MMV_SEDIA')->nullable();
            $table->integer('markahTL6_MMV_SEDIA')->nullable();
            $table->integer('markahTL7_MMV_SEDIA')->nullable();
            $table->integer('markahTL8_MMV_SEDIA')->nullable();
            $table->integer('markahTL81_MMV_SEDIA')->nullable();
            $table->integer('markahTL82_MMV_SEDIA')->nullable();
            $table->integer('markahTL83_MMV_SEDIA')->nullable();
            $table->integer('markahTL84_MMV_SEDIA')->nullable();
            $table->integer('markahTL85_MMV_SEDIA')->nullable();
            $table->integer('markahTL9_MMV_SEDIA')->nullable();
            $table->integer('markahTL91_MMV_SEDIA')->nullable();
            $table->integer('markahTL92_MMV_SEDIA')->nullable();
            $table->integer('markahTL10_MMV_SEDIA')->nullable();

            $table->integer('markahKT1_MMV_SEDIA')->nullable();
            $table->integer('markahKT2_MMV_SEDIA')->nullable();
            $table->integer('markahKT21_MMV_SEDIA')->nullable();
            $table->integer('markahKT22_MMV_SEDIA')->nullable();
            $table->integer('markahKT3_MMV_SEDIA')->nullable();
            $table->integer('markahKT31_MMV_SEDIA')->nullable();
            $table->integer('markahKT32_MMV_SEDIA')->nullable();
            $table->integer('markahKT4_MMV_SEDIA')->nullable();
            $table->integer('markahKT5_MMV_SEDIA')->nullable();
            $table->integer('markahKT51_MMV_SEDIA')->nullable();
            $table->integer('markahKT52_MMV_SEDIA')->nullable();
            $table->integer('markahKT53_MMV_SEDIA')->nullable();
            $table->integer('markahKT6_MMV_SEDIA')->nullable();
            $table->integer('markahKT61_MMV_SEDIA')->nullable();
            $table->integer('markahKT62_MMV_SEDIA')->nullable();
            $table->integer('markahKT7_MMV_SEDIA')->nullable();
            $table->integer('markahKT8_MMV_SEDIA')->nullable();
            $table->integer('markahKT9_MMV_SEDIA')->nullable();
            $table->integer('markahKT10_MMV_SEDIA')->nullable();
            $table->integer('markahKT101_MMV_SEDIA')->nullable();
            $table->integer('markahKT102_MMV_SEDIA')->nullable();
            $table->integer('markahKT103_MMV_SEDIA')->nullable();
            $table->integer('markahKT11_MMV_SEDIA')->nullable();

            $table->integer('markahSB1_MMV_SEDIA')->nullable();
            $table->integer('markahSB2_MMV_SEDIA')->nullable();
            $table->integer('markahSB3_MMV_SEDIA')->nullable();
            $table->integer('markahSB4_MMV_SEDIA')->nullable();

            $table->integer('markahPA1_MMV_SEDIA')->nullable();
            $table->integer('markahPA2_MMV_SEDIA')->nullable();
            $table->integer('markahPA3_MMV_SEDIA')->nullable();
            $table->integer('markahPA32_MMV_SEDIA')->nullable();
            $table->integer('markahPA4_MMV_SEDIA')->nullable();
            $table->integer('markahPA5_MMV_SEDIA')->nullable();

            $table->integer('markahPD1_MMV_SEDIA')->nullable();
            $table->integer('markahPD2_MMV_SEDIA')->nullable();
            $table->integer('markahPD21_MMV_SEDIA')->nullable();
            $table->integer('markahPD22_MMV_SEDIA')->nullable();
            $table->integer('markahPD23_MMV_SEDIA')->nullable();
            $table->integer('markahPD24_MMV_SEDIA')->nullable();
            $table->integer('markahPD25_MMV_SEDIA')->nullable();
            $table->integer('markahPD3_MMV_SEDIA')->nullable();
            $table->integer('markahPD31_MMV_SEDIA')->nullable();
            $table->integer('markahPD32_MMV_SEDIA')->nullable();
            $table->integer('markahPD33_MMV_SEDIA')->nullable();
            $table->integer('markahPD34_MMV_SEDIA')->nullable();
            $table->integer('markahPD35_MMV_SEDIA')->nullable();
            $table->integer('markahPD4_MMV_SEDIA')->nullable();
            $table->integer('markahPD41_MMV_SEDIA')->nullable();
            $table->integer('markahPD42_MMV_SEDIA')->nullable();
            $table->integer('markahPD5_MMV_SEDIA')->nullable();
            $table->integer('markahPD51_MMV_SEDIA')->nullable();
            $table->integer('markahPD52_MMV_SEDIA')->nullable();
            $table->integer('markahPD6_MMV_SEDIA')->nullable();
            $table->integer('markahPD61_MMV_SEDIA')->nullable();
            $table->integer('markahPD62_MMV_SEDIA')->nullable();
            $table->integer('markahPD7_MMV_SEDIA')->nullable();
            $table->integer('markahPD8_MMV_SEDIA')->nullable();
            $table->integer('markahPD9_MMV_SEDIA')->nullable();
            $table->integer('markahPD10_MMV_SEDIA')->nullable();

            $table->integer('markahFL1_MMV_SEDIA')->nullable();
            $table->integer('markahFL2_MMV_SEDIA')->nullable();
            $table->integer('markahFL21_MMV_SEDIA')->nullable();
            $table->integer('markahFL22_MMV_SEDIA')->nullable();
            $table->integer('markahFL23_MMV_SEDIA')->nullable();
            $table->integer('markahFL3_MMV_SEDIA')->nullable();
            $table->integer('markahFL31_MMV_SEDIA')->nullable();
            $table->integer('markahFL32_MMV_SEDIA')->nullable();
            $table->integer('markahFL33_MMV_SEDIA')->nullable();
            $table->integer('markahFL34_MMV_SEDIA')->nullable();

            $table->integer('markahIN1_MMV_SEDIA')->nullable();

            $table->integer('markahTOTAL_TL_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_KT_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_SB_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_PA_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_PD_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_FL_MMV_SEDIA')->nullable();
            $table->integer('markahTOTAL_IN_MMV_SEDIA')->nullable();


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
