<?php

use App\Models\PenilaianEphjkr;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaPhjkrBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_phjkr_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string('jenisKategori')->nullable();
            $table->foreignIdFor(PenilaianEphjkr::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('markahTL')->nullable();
            $table->integer('markahKT')->nullable();
            $table->integer('markahSB')->nullable();
            $table->integer('markahPD')->nullable();
            $table->integer('markahFL')->nullable();
            $table->integer('markahIN')->nullable();
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
        Schema::dropIfExists('kriteria_phjkr_bangunans');
    }
}
