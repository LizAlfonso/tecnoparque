<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetInfraestructuraPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_infraestructura_personas', function (Blueprint $table) {

             //primary key
            $table->increments('idDetInfraestructuraPersona');

            //foreign key
            $table->integer('idInfraestructura')->unsigned();
            $table->foreign('idInfraestructura')->references('idInfraestructura')->on('infraestructuras');

            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');


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
        Schema::drop('det_infraestructura_personas');
    }
}
