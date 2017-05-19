<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipocuenta', ['Interna', 'Externa'])->default('Interna');
            $table->enum('clasecuenta', ['Administrativo', 'Docente', 'Estudiante', 'Persona Natural', 'Persona Jurídica'])->nullable();
            $table->integer('rol_id')->unsigned();
            $table->enum('estadocuenta', ['Activa', 'Inactiva', 'Base'])->default('Base');
            $table->enum('tipodoc', ['C.C.', 'C.E.', 'T.I.', 'Pasaporte', 'Licencia de Conducción', 'NIT', 'RUT'])->default('C.C.');
            $table->string('numdoc', 25);
            $table->string('email')->unique();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 50);
            $table->enum('sexo', ['Femenino', 'Masculino'])->nullable();
            $table->date('fechanac');
            $table->string('celular', 15);
            $table->string('password', 50);
            $table->string('codigou', 10)->nullable();
            $table->string('razonsoc', 50)->nullable();
            $table->rememberToken();
            $table->timestamps();
             
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}
