<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_studio');
            $table->enum('tipe_studio', ['Reguler', '2D', '3D', '4D', 'Gold Class', 'Velvet Class', 'Satin Class', 'Sphere X', 'Starium', 'Sweetbox', 
                                         'Cinemaxx Reguler', 'Cinemaxx Gold', 'Ultra XD', 'Cinemaxx Junior',]);
            $table->integer('jumlah_kursi');
            $table->string('kode_kursi');
            $table->text('keterangan');
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
        Schema::dropIfExists('studios');
    }
}
