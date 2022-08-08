<?php

use App\Models\Peringkat;
use App\Models\Projek;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianEphjkrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_ephjkrs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Projek::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Peringkat::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('jumlahMarkah')->nullable();
            $table->string('peratusan')->nullable();
            $table->string('penarafan')->nullable();
            $table->string('pengesahan')->nullable();
            $table->string('ulasan')->nullable();
            $table->string('rayuan')->nullable();
            $table->string('pengesahanRayuan')->nullable();
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
        Schema::dropIfExists('penilaian_ephjkrs');
    }
}
