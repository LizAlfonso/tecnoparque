<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetPersonaProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_persona_proyectos', function (Blueprint $table) {

            //primary key
            $table->increments('idDetPersonaProyecto');

            //normal values
            $table->boolean('lider')->nullable();

            //foreign key

            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');

            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('idProyecto')->on('proyectos');

            //Others
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('det_persona_proyectos');
    }
}
