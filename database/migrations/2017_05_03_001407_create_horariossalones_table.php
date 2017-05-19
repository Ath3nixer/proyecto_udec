<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariossalonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horariossalones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomencargado', 50);
            $table->date('fecha');
            $table->time('horainisal');
            $table->time('horafinsal');
            $table->integer('cuenta_id')->unsigned();
            $table->integer('salon_id')->unsigned();

            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');
            $table->foreign('salon_id')->references('id')->on('salones')->onDelete('cascade');

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
        Schema::dropIfExists('horariossalones');
    }
}
