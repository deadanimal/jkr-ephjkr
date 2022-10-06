<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahTotalToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahTOTAL_TL_MMR')->nullable();
            $table->integer('markahTOTAL_TL_MS')->nullable();
            $table->integer('markahTOTAL_TL_MR')->nullable();
            $table->integer('markahTOTAL_TL_MMV')->nullable();
            $table->integer('markahTOTAL_TL_MSV')->nullable();
            $table->integer('markahTOTAL_TL_ML')->nullable();

            $table->integer('markahTOTAL_KT_MMR')->nullable();
            $table->integer('markahTOTAL_KT_MS')->nullable();
            $table->integer('markahTOTAL_KT_MR')->nullable();
            $table->integer('markahTOTAL_KT_MMV')->nullable();
            $table->integer('markahTOTAL_KT_MSV')->nullable();
            $table->integer('markahTOTAL_KT_ML')->nullable();

            $table->integer('markahTOTAL_SB_MMR')->nullable();
            $table->integer('markahTOTAL_SB_MS')->nullable();
            $table->integer('markahTOTAL_SB_MR')->nullable();
            $table->integer('markahTOTAL_SB_MMV')->nullable();
            $table->integer('markahTOTAL_SB_MSV')->nullable();
            $table->integer('markahTOTAL_SB_ML')->nullable();

            $table->integer('markahTOTAL_PA_MMR')->nullable();
            $table->integer('markahTOTAL_PA_MS')->nullable();
            $table->integer('markahTOTAL_PA_MR')->nullable();
            $table->integer('markahTOTAL_PA_MMV')->nullable();
            $table->integer('markahTOTAL_PA_MSV')->nullable();
            $table->integer('markahTOTAL_PA_ML')->nullable();

            $table->integer('markahTOTAL_PD_MMR')->nullable();
            $table->integer('markahTOTAL_PD_MS')->nullable();
            $table->integer('markahTOTAL_PD_MR')->nullable();
            $table->integer('markahTOTAL_PD_MMV')->nullable();
            $table->integer('markahTOTAL_PD_MSV')->nullable();
            $table->integer('markahTOTAL_PD_ML')->nullable();

            $table->integer('markahTOTAL_FL_MMR')->nullable();
            $table->integer('markahTOTAL_FL_MS')->nullable();
            $table->integer('markahTOTAL_FL_MR')->nullable();
            $table->integer('markahTOTAL_FL_MMV')->nullable();
            $table->integer('markahTOTAL_FL_MSV')->nullable();
            $table->integer('markahTOTAL_FL_ML')->nullable();

            $table->integer('markahTOTAL_IN_MMR')->nullable();
            $table->integer('markahTOTAL_IN_MS')->nullable();
            $table->integer('markahTOTAL_IN_MR')->nullable();
            $table->integer('markahTOTAL_IN_MMV')->nullable();
            $table->integer('markahTOTAL_IN_MSV')->nullable();
            $table->integer('markahTOTAL_IN_ML')->nullable();
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
