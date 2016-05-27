<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_proyectos', function (Blueprint $table) {
            
             //primary key
            $table->increments('idEstadoProyecto');

            //normal values
            $table->string('nombre',45);
            $table->date('fechaEstado');

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
        Schema::drop('estado_proyectos');
    }
}
