<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talentos', function (Blueprint $table) {

            //primary key
            $table->increments('idTalento');

            //normal values
            $table->date('fechaNacimiento');
            $table->char('estrato',1);
            $table->string('direccion',30);
            $table->boolean('graduado')->nullable();
            $table->char('anhoTerminacion',4)->nullable();
            $table->string('tituloObtenido',40)->nullable();
            $table->string('institucion',100)->nullable();
            $table->boolean('asistenteLaboratorio');

            //foreign key
             $table->integer('idPersona')->unsigned();
             $table->foreign('idPersona')->references('idPersona')->on('personas');

             $table->integer('idNivelAcademico')->unsigned();
             $table->foreign('idNivelAcademico')->references('idNivelAcademico')->on('nivel_academicos');

             $table->integer('idCiudad')->unsigned();
             $table->foreign('idCiudad')->references('idCiudad')->on('ciudads');

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
        Schema::drop('talentos');
    }
}
