<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormpinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formpinjams', function (Blueprint $table) {
            $table->increments('id_form');
            $table->string('nama_peminjam', 30)->nullable();
            $table->string('nrp', 16)->nullable();
            $table->string('fakultas', 10)->nullable();
            $table->string('departemen', 20)->nullable();
            $table->string('alamat_rumah', 50)->nullable();
            $table->string('alamat_sby', 50)->nullable();
            $table->string('nohp', 14)->nullable();
            $table->string('email', 30)->nullable();
            $table->date('tanggal_pinjam')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->string('status', 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formpinjams');
    }
}
