<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('radicado', 10);
            $table->date('fechaenvio');
            $table->string('descripcion', 250);
            $table->string('observaciones', 100);
            $table->integer('evalservic');
            $table->enum('estadosoli', ['En espera', 'Pospuesta', 'Cancelada', 'En ejecución', 'Finalizada']);
            $table->integer('tiposoli_id')->unsigned();

            $table->foreign('tiposoli_id')->references('id')->on('tipossolicitudes')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::create('cuentas_solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cuenta_id')->unsigned();
            $table->integer('solicitud_id')->unsigned();

            $table->foreign('solicitud_id')->references('id')->on('solicitudes')->onDelete('cascade');
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
