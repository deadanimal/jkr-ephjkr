<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkahMsToKriteriaPhjkrBangunans extends Migration
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
            $table->integer('markahMMR')->nullable();
            $table->integer('markahMS')->nullable();
            $table->integer('markahMR')->nullable();
            $table->integer('markahMMV')->nullable();
            $table->integer('markahMSV')->nullable();
            $table->integer('markahML')->nullable();
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
