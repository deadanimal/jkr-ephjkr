<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToSelenggaraKriteriaPenilaians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selenggara_kriteria_penilaians', function (Blueprint $table) {
            
            $table->string('nama_kriteria')->nullable();
            $table->string('jenis_kriteria')->nullable();
            $table->string('kategori_kriteria')->nullable();
            $table->string('kod_kriteria')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selenggara_kriteria_penilaians', function (Blueprint $table) {
            
            $table->dropColumn('nama_kriteria');
            $table->dropColumn('jenis_kriteria');
            $table->dropColumn('kategori_kriteria');
            $table->dropColumn('kod_kriteria');
        });
    }
}
