<?php

use App\Models\Projek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiJalanVerifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilai_jalan_verifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('syarikat_cawangan')->nullable();
            $table->string('no_tel')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('disiplin')->nullable();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('kategori')->nullable();
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
        Schema::dropIfExists('penilai_jalan_verifikasis');
    }
}
