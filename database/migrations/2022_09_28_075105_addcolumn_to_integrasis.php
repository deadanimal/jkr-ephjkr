<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnToIntegrasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('integrasis', function (Blueprint $table) {
            //
            $table->string('tajuk_projek')->nullable();
            $table->string('rujukan_skala')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('integrasis', function (Blueprint $table) {
            //
        });
    }
}
