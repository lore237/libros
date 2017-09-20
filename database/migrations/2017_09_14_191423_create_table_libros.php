<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('autor');
            $table->float('precio',8,2);
            $table->string('editorial');
            $table->string('genero');
            $table->integer ('id_proveedores')->unsigned();
            $table->foreign('id_proveedores')->references('id')->on('proveedores');
            $table->date('fecha_lanzamiento');
            $table->string('tipo_tapa');
            $table->string('isbn'); 
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
        Schema::dropIfExists('libros');
    }
}
