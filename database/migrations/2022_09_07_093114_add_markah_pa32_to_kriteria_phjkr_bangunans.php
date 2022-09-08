<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahPa32ToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahPA32_MMR')->nullable();
            $table->integer('markahPA32_MS')->nullable();
            $table->integer('markahPA32_MR')->nullable();
            $table->integer('markahPA32_MMV')->nullable();
            $table->integer('markahPA32_MSV')->nullable();
            $table->integer('markahPA32_ML')->nullable();
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
