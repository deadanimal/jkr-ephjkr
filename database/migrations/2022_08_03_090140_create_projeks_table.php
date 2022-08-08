<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeks', function (Blueprint $table) {
            $table->id();
            $table->string('id_ruj_skala')->nullable();
            $table->string('namaProjek')->nullable();
            $table->text('alamatProjek')->nullable();
            $table->integer('poskod')->nullable();
            $table->string('bandar')->nullable();
            $table->string('negeri')->nullable();
            $table->string('keluasanTapak')->nullable();
            $table->integer('jumlahblokBangunan')->nullable();
            $table->string('kategoriBangunan')->nullable();
            $table->string('dokumenSokongan')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('tarikhJangkaMulaPembinaan')->nullable();
            $table->string('tarikhJangkaSiapPembinaan')->nullable();
            $table->string('kaedahPelaksanaan')->nullable();
            $table->string('jenisPelaksanaan')->nullable();
            $table->float('kosProjek', 20,2)->nullable();
            $table->string('jenisKategoriProjek')->nullable();
            $table->string('tempohSijil')->nullable();
            $table->float('jarak', 10, 2)->nullable();
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
        Schema::dropIfExists('projeks');
    }
}
