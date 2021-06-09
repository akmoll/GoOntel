<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsepedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listsepeda', function (Blueprint $table) {
            $table->foreign('kodesepeda')->references('kode_sepeda')->on('detailsepeda')->unsigned();
            $table->string('merk_sepeda', 15);
            $table->string('status_sepeda', 10);
            $table->string('jenis_sepeda', 10);
            $table->unsignedInteger('kodesepeda');
            $table->foreign('idpetugas')->references('id_petugas')->on('petugas')->unsigned();
            $table->unsignedInteger('idpetugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listsepeda');
    }
}
