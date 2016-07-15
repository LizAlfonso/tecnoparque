<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            
            //primary key
            $table->increments('idProyecto');

            //normal values
            $table->string('titulo',60)->unique();  
            $table->date('fechaInicio')->nullable();   
            $table->string('descripcion',200)->nullable();  

            //foreign key
            $table->integer('idAreaConocimiento')->unsigned();
            $table->foreign('idAreaConocimiento')->references('idAreaConocimiento')->on('area_conocimientos');

            $table->integer('idTipoProyecto')->unsigned();
            $table->foreign('idTipoProyecto')->references('idTipoProyecto')->on('tipo_proyectos');

            $table->integer('idEstadoProyecto')->unsigned();
            $table->foreign('idEstadoProyecto')->references('idEstadoProyecto')->on('estado_proyectos');

            $table->integer('idClasificacion')->unsigned();
            $table->foreign('idClasificacion')->references('idClasificacion')->on('clasificacions');
            
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
        Schema::drop('proyectos');
    }
}
