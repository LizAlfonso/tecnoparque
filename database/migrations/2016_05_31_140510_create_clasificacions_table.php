<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacions', function (Blueprint $table) {

            //primary key
            $table->increments('idClasificacion');
            
            //normal values
            $table->tinyInteger('estadoPropuesta');  
            $table->tinyInteger('conformacionEquipo');    
            $table->tinyInteger('categoria');  
            $table->string('objetivoGeneral',100);    
            $table->string('alcance',250);  

            //foreign key
            $table->integer('idPersona')->unsigned();
            $table->foreign('idPersona')->references('idPersona')->on('personas');
            
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
        Schema::drop('clasificacions');
    }
}
