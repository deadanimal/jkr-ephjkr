<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAwwsToKriteriaGpssBangunans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kriteria_gpss_bangunans', function (Blueprint $table) {
            $table->integer('markahAwWs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kriteria_gpss_bangunans', function (Blueprint $table) {
            $table->dropColumn('markahAwWs');
        });
    }
}
