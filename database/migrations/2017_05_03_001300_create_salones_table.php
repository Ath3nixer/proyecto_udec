<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numsalon', 4);
            $table->string('nomsalon', 50);
            $table->string('descripcion', 250);
            $table->integer('cantequipos');
            $table->integer('ubicacion_id')->unsigned();
            $table->integer('programa_id')->unsigned();

            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');

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
        Schema::dropIfExists('salones');
    }
}
