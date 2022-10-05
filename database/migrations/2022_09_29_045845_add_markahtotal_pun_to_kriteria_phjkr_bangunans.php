<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahtotalPunToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahTOTAL_TL_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_TL_MS_PUN')->nullable();
            $table->integer('markahTOTAL_TL_MR_PUN')->nullable();
            $table->integer('markahTOTAL_TL_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_TL_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_TL_ML_PUN')->nullable();

            $table->integer('markahTOTAL_KT_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_KT_MS_PUN')->nullable();
            $table->integer('markahTOTAL_KT_MR_PUN')->nullable();
            $table->integer('markahTOTAL_KT_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_KT_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_KT_ML_PUN')->nullable();

            $table->integer('markahTOTAL_SB_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_SB_MS_PUN')->nullable();
            $table->integer('markahTOTAL_SB_MR_PUN')->nullable();
            $table->integer('markahTOTAL_SB_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_SB_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_SB_ML_PUN')->nullable();

            $table->integer('markahTOTAL_PA_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_PA_MS_PUN')->nullable();
            $table->integer('markahTOTAL_PA_MR_PUN')->nullable();
            $table->integer('markahTOTAL_PA_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_PA_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_PA_ML_PUN')->nullable();

            $table->integer('markahTOTAL_PD_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_PD_MS_PUN')->nullable();
            $table->integer('markahTOTAL_PD_MR_PUN')->nullable();
            $table->integer('markahTOTAL_PD_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_PD_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_PD_ML_PUN')->nullable();

            $table->integer('markahTOTAL_FL_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_FL_MS_PUN')->nullable();
            $table->integer('markahTOTAL_FL_MR_PUN')->nullable();
            $table->integer('markahTOTAL_FL_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_FL_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_FL_ML_PUN')->nullable();

            $table->integer('markahTOTAL_IN_MMR_PUN')->nullable();
            $table->integer('markahTOTAL_IN_MS_PUN')->nullable();
            $table->integer('markahTOTAL_IN_MR_PUN')->nullable();
            $table->integer('markahTOTAL_IN_MMV_PUN')->nullable();
            $table->integer('markahTOTAL_IN_MSV_PUN')->nullable();
            $table->integer('markahTOTAL_IN_ML_PUN')->nullable();
            
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
