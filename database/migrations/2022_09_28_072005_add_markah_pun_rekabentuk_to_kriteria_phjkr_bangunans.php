<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahPunRekabentukToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahTL1_MR_PUN')->nullable();
            $table->integer('markahTL2_MR_PUN')->nullable();
            $table->integer('markahTL3_MR_PUN')->nullable();
            $table->integer('markahTL32_MR_PUN')->nullable();
            $table->integer('markahTL4_MR_PUN')->nullable();
            $table->integer('markahTL5_MR_PUN')->nullable();
            $table->integer('markahTL6_MR_PUN')->nullable();
            $table->integer('markahTL7_MR_PUN')->nullable();
            $table->integer('markahTL8_MR_PUN')->nullable();
            $table->integer('markahTL81_MR_PUN')->nullable();
            $table->integer('markahTL82_MR_PUN')->nullable();
            $table->integer('markahTL83_MR_PUN')->nullable();
            $table->integer('markahTL84_MR_PUN')->nullable();
            $table->integer('markahTL85_MR_PUN')->nullable();
            $table->integer('markahTL9_MR_PUN')->nullable();
            $table->integer('markahTL91_MR_PUN')->nullable();
            $table->integer('markahTL92_MR_PUN')->nullable();
            $table->integer('markahTL10_MR_PUN')->nullable();

            $table->integer('markahKT1_MR_PUN')->nullable();
            $table->integer('markahKT2_MR_PUN')->nullable();
            $table->integer('markahKT21_MR_PUN')->nullable();
            $table->integer('markahKT22_MR_PUN')->nullable();
            $table->integer('markahKT3_MR_PUN')->nullable();
            $table->integer('markahKT31_MR_PUN')->nullable();
            $table->integer('markahKT32_MR_PUN')->nullable();
            $table->integer('markahKT4_MR_PUN')->nullable();
            $table->integer('markahKT5_MR_PUN')->nullable();
            $table->integer('markahKT51_MR_PUN')->nullable();
            $table->integer('markahKT52_MR_PUN')->nullable();
            $table->integer('markahKT53_MR_PUN')->nullable();
            $table->integer('markahKT6_MR_PUN')->nullable();
            $table->integer('markahKT61_MR_PUN')->nullable();
            $table->integer('markahKT62_MR_PUN')->nullable();
            $table->integer('markahKT7_MR_PUN')->nullable();
            $table->integer('markahKT8_MR_PUN')->nullable();
            $table->integer('markahKT9_MR_PUN')->nullable();
            $table->integer('markahKT10_MR_PUN')->nullable();
            $table->integer('markahKT101_MR_PUN')->nullable();
            $table->integer('markahKT102_MR_PUN')->nullable();
            $table->integer('markahKT103_MR_PUN')->nullable();
            $table->integer('markahKT11_MR_PUN')->nullable();

            $table->integer('markahSB1_MR_PUN')->nullable();
            $table->integer('markahSB2_MR_PUN')->nullable();
            $table->integer('markahSB3_MR_PUN')->nullable();
            $table->integer('markahSB4_MR_PUN')->nullable();

            $table->integer('markahPA1_MR_PUN')->nullable();
            $table->integer('markahPA2_MR_PUN')->nullable();
            $table->integer('markahPA3_MR_PUN')->nullable();
            $table->integer('markahPA32_MR_PUN')->nullable();
            $table->integer('markahPA4_MR_PUN')->nullable();
            $table->integer('markahPA5_MR_PUN')->nullable();

            $table->integer('markahPD1_MR_PUN')->nullable();
            $table->integer('markahPD2_MR_PUN')->nullable();
            $table->integer('markahPD21_MR_PUN')->nullable();
            $table->integer('markahPD22_MR_PUN')->nullable();
            $table->integer('markahPD23_MR_PUN')->nullable();
            $table->integer('markahPD24_MR_PUN')->nullable();
            $table->integer('markahPD25_MR_PUN')->nullable();
            $table->integer('markahPD3_MR_PUN')->nullable();
            $table->integer('markahPD31_MR_PUN')->nullable();
            $table->integer('markahPD32_MR_PUN')->nullable();
            $table->integer('markahPD33_MR_PUN')->nullable();
            $table->integer('markahPD34_MR_PUN')->nullable();
            $table->integer('markahPD35_MR_PUN')->nullable();
            $table->integer('markahPD4_MR_PUN')->nullable();
            $table->integer('markahPD41_MR_PUN')->nullable();
            $table->integer('markahPD42_MR_PUN')->nullable();
            $table->integer('markahPD5_MR_PUN')->nullable();
            $table->integer('markahPD51_MR_PUN')->nullable();
            $table->integer('markahPD52_MR_PUN')->nullable();
            $table->integer('markahPD6_MR_PUN')->nullable();
            $table->integer('markahPD61_MR_PUN')->nullable();
            $table->integer('markahPD62_MR_PUN')->nullable();
            $table->integer('markahPD7_MR_PUN')->nullable();
            $table->integer('markahPD8_MR_PUN')->nullable();
            $table->integer('markahPD9_MR_PUN')->nullable();
            $table->integer('markahPD10_MR_PUN')->nullable();

            $table->integer('markahFL1_MR_PUN')->nullable();
            $table->integer('markahFL2_MR_PUN')->nullable();
            $table->integer('markahFL21_MR_PUN')->nullable();
            $table->integer('markahFL22_MR_PUN')->nullable();
            $table->integer('markahFL23_MR_PUN')->nullable();
            $table->integer('markahFL3_MR_PUN')->nullable();
            $table->integer('markahFL31_MR_PUN')->nullable();
            $table->integer('markahFL32_MR_PUN')->nullable();
            $table->integer('markahFL33_MR_PUN')->nullable();
            $table->integer('markahFL34_MR_PUN')->nullable();
        
            $table->integer('markahIN1_MR_PUN')->nullable();

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
