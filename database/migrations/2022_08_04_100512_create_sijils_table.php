<?php

use App\Models\Peringkat;
use App\Models\Projek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSijilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sijils', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Peringkat::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('skalaMarkah')->nullable();
            $table->string('pencapaian')->nullable();
            $table->integer('bintang')->nullable();
            $table->string('tarikh')->nullable();
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
        Schema::dropIfExists('sijils');
    }
}
