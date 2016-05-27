<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestors', function (Blueprint $table) {

            //primary key
            $table->increments('idGestor');

            //foreign key
            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');

            $table->integer('idLineaTecnologica')->unsigned();
            $table->foreign('idLineaTecnologica')->references('idLineaTecnologica')->on('linea_tecnologicas');

            $table->integer('idTipoGestor')->unsigned();
            $table->foreign('idTipoGestor')->references('idTipoGestor')->on('tipo_gestors');

            //others
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
        Schema::drop('gestors');
    }
}
