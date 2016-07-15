<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_conocimientos', function (Blueprint $table) {
            
            //primary key
            $table->increments('idAreaConocimiento');

            //normal values
             $table->string('nombre',50)->unique();              

            //foreign key
            $table->integer('idLineaTecnologica')->unsigned();
            $table->foreign('idLineaTecnologica')->references('idLineaTecnologica')->on('linea_tecnologicas');
            
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
        Schema::drop('area_conocimientos');
    }
}
