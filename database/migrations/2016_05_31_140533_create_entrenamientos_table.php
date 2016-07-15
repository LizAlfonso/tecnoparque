<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamientos', function (Blueprint $table) {

           //primary key
            $table->increments('idEntrenamiento');

            //normal values
            $table->tinyInteger('numeroEntrenamiento')->nullable();  
            $table->boolean('confirmacion')->nullable();  
            $table->boolean('documentosCompletos')->nullable();  
            $table->date('fechaComite')->nullable();   
            $table->time('horaComite')->nullable();  
            $table->boolean('asistencia')->nullable();  
            $table->boolean('admitido')->nullable(); 
            $table->string('comentarios',100)->nullable(); 

            //foreign key
            $table->integer('idFechaEntrenamiento')->unsigned();
            $table->foreign('idFechaEntrenamiento')->references('idFechaEntrenamiento')->on('fecha_entrenamientos');

            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('idProyecto')->on('proyectos');

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
        Schema::drop('entrenamientos');
    }
}
