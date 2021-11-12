<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 20);
            $table->string('apellidos', 40);
            $table->tinyInteger('edad');
            $table->string('email', 40)->unique();
            $table->string('telefono',15);
            $table->integer('id_grupo')->unsigned();
            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
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
        //
    }
}
