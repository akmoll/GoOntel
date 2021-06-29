<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsepedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listsepedas', function (Blueprint $table) {
            $table->increments('kode_sepeda');
            $table->string('merk_sepeda', 15);
            $table->string('status_sepeda', 10);
            $table->string('jenis_sepeda', 10);
            $table->foreign('idpetugas')->references('id_petugas')->on('petugas')->unsigned();
            $table->unsignedInteger('idpetugas');
            $table->string('kualitas_sepeda', 10);
            $table->integer('harga_sepeda');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listsepedas');
    }
}
