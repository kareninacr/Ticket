<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('waktu_booking');
            $table->bigInteger('cinemas_id')->unsigned()->index();
            $table->integer('jumlah_tiket');
            $table->integer('total_bayar');
            $table->bigInteger('payments_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('cinemas_id')->references('id')->on('cinemas');
            $table->foreign('payments_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
