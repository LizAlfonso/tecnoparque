<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {

            //primary key
            $table->increments('idPersona');

            //normal values
             $table->string('numeroIdentificacion',15);
             $table->string('nombres',50);          
             $table->string('apellidos',50);        
             $table->boolean('genero');      
             $table->string('telefono',7);
             $table->string('celular',10);
             $table->string('correo',254);
             $table->string('empresa',30);        
             $table->boolean('estado');     

            //foreign key
            $table->integer('idTipoPersona')->unsigned();
            $table->foreign('idTipoPersona')->references('idTipoPersona')->on('tipo_personas');

            $table->integer('idTipoDocumento')->unsigned();
            $table->foreign('idTipoDocumento')->references('idTipoDocumento')->on('tipo_documentos');
            
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
        Schema::drop('personas');
    }
}
