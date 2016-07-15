<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraestructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructuras', function (Blueprint $table) {

            //primary key
            $table->increments('idInfraestructura');

            //normal values
            $table->date('fechaRegistro')->nullable();
            $table->string('horaIngreso',8);
            $table->string('horaSalida',8);
            $table->string('duracionAsesoria',8)->nullable();

            //foreign key
            $table->integer('idRecurso')->unsigned();
            $table->foreign('idRecurso')->references('idRecurso')->on('recursos');

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
        Schema::drop('infraestructuras');
    }
}
