<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianRekaBentukBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_reka_bentuk_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('syarikat');
            $table->string('noTel');
            $table->string('noFax');
            $table->string('emel');
            $table->string('disiplin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_reka_bentuk_bangunans');
    }
}
