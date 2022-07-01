<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');//titulo del evento 
            $table->dateTime('start');//fecha de inicio
            $table->dateTime('end');//fecha final 
            $table->string('tipo');//veterinaria o peluquero 
            $table->integer('estado');//disponible 1, no disponbile 0 
            $table->timestamps();
           /*  $table->foreignId('idPersona')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade'); */




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
