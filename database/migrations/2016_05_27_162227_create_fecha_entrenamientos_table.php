<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFechaEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecha_entrenamientos', function (Blueprint $table) {

            //primary key
            $table->increments('idFechaEntrenamiento');

            //normal values
            $table->date('fecha');
            $table->boolean('asistencia');

            //others
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
        Schema::drop('fecha_entrenamientos');
    }
}
