<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_formacions', function (Blueprint $table) {
            
            //primary key
            $table->increments('idCentroFormacion');

            //normal values
            $table->string('nombre',60)->unique();  

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
        Schema::drop('centro_formacions');
    }
}
