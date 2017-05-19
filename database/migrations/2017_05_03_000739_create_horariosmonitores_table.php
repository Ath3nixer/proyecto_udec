<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosmonitoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horariosmonitores', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('horaini');
            $table->time('horafin');
            $table->integer('cuenta_id')->unsigned();

            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');

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
        Schema::dropIfExists('horariosmonitores');
    }
}
