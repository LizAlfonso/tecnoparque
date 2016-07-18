<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            
            //primary key
            $table->increments('idEvento');

            //normal values
            $table->string('nombre',50);          
            $table->date('fecha');        
            $table->string('hora',10);      
            $table->string('lugar',6);
            $table->string('lugarEspecifico',35)->nullable();  
            $table->tinyInteger('cupos')->nullable();
            $table->string('descripcion',100)->nullable();      

            //foreign key
            $table->integer('idServicio')->unsigned();
            $table->foreign('idServicio')->references('idServicio')->on('servicios');

            $table->integer('idLugar')->unsigned();
            $table->foreign('idLugar')->references('idLugar')->on('lugars');

            //Others
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
        Schema::drop('eventos');
    }
}
