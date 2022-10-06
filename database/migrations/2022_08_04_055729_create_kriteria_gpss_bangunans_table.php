<?php

use App\Models\PenilaianEphjkr;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaGpssBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_gpss_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string('jenisKategori')->nullable();
            $table->foreignIdFor(PenilaianEphjkr::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('markahAwR')->nullable();
            $table->integer('markahAwW')->nullable();
            $table->integer('markahAwD')->nullable();
            $table->integer('markahAwF')->nullable();
            $table->integer('markahAwS')->nullable();
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
        Schema::dropIfExists('kriteria_gpss_bangunans');
    }
}
