<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id'); //idPengguna
            $table->string('icPengguna')->nullable();
            $table->string('name'); //namaPengguna
            $table->string('email')->unique(); //emelPengguna
            $table->string('namaSyarikat')->nullable();
            $table->string('namaCawangan')->nullable();
            $table->text('alamatSyarikat')->nullable();
            $table->text('alamatCawangan')->nullable();
            $table->string('daerah')->nullable();
            $table->string('negeri')->nullable();
            $table->string('notelbimbitPengguna')->nullable();
            $table->string('notelPengguna')->nullable();
            $table->string('nofaxPengguna')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); //katalaluan
            $table->rememberToken();
            $table->timestamps();
            $table->string('sijilKompeten')->nullable();
            $table->string('kelayakanAkademik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
