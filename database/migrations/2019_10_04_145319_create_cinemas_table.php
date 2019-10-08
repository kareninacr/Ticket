<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_bioskop');
            $table->string('alamat');
            $table->string('tlp');
            $table->bigInteger('films_id')->unsigned()->index();
            $table->datetime('jadwal_tayang');
            $table->integer('harga_tiket');
            $table->bigInteger('studios_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('films_id')->references('id')->on('films');
            $table->foreign('studios_id')->references('id')->on('studios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinemas');
    }
}
