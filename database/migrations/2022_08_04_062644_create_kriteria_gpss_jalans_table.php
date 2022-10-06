<?php

use App\Models\PenilaianEphjkr;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaGpssJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_gpss_jalans', function (Blueprint $table) {
            $table->id();
            $table->string('jenisKategori')->nullable();
            $table->foreignIdFor(PenilaianEphjkr::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('markahPRSew')->nullable();
            $table->integer('markahPRSTw')->nullable();
            $table->integer('markahPRRw')->nullable();
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
        Schema::dropIfExists('kriteria_gpss_jalans');
    }
}
