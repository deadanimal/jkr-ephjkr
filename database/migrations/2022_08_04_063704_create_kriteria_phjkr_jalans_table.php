<?php

use App\Models\PenilaianEphjkr;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaPhjkrJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_phjkr_jalans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PenilaianEphjkr::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('jenisKategori')->nullable();
            $table->integer('markahSM1')->nullable();
            $table->integer('markahSM2')->nullable();
            $table->integer('markahSM3')->nullable();
            $table->integer('markahSM4')->nullable();
            $table->integer('markahPT1')->nullable();
            $table->integer('markahPT2')->nullable();
            $table->integer('markahPT3')->nullable();
            $table->integer('markahPT4')->nullable();
            $table->integer('markahEW1')->nullable();
            $table->integer('markahEW2')->nullable();
            $table->integer('markahAE1')->nullable();
            $table->integer('markahCA1')->nullable();
            $table->integer('markahCA2')->nullable();
            $table->integer('markahCA3')->nullable();
            $table->integer('markahCA4')->nullable();
            $table->integer('markahCA5')->nullable();
            $table->integer('markahCA6')->nullable();
            $table->integer('markahCA7')->nullable();
            $table->integer('markahMR1')->nullable();
            $table->integer('markahMR2')->nullable();
            $table->integer('markahMR3')->nullable();
            $table->integer('markahMR4')->nullable();
            $table->integer('markahSM5EC')->nullable();
            $table->integer('markahSM6EC')->nullable();
            $table->integer('markahEW3EC')->nullable();
            $table->integer('markahAE2EC')->nullable();
            $table->integer('markahAE3EC')->nullable();
            $table->integer('markahAE4EC')->nullable();
            $table->integer('markahAE5EC')->nullable();
            $table->integer('markahAE6EC')->nullable();
            $table->integer('markahINI')->nullable();
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
        Schema::dropIfExists('kriteria_phjkr_jalans');
    }
}
