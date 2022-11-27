<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->bigIncrements('id_libro');
            $table->string('ISBN',13);
            $table->string('titulo');
            $table->unsignedBigInteger('id_autor');
            $table->string('paginas');
            $table->string('editorial');
            $table->string('email_edit');
            $table->timestamps();

            $table->foreign('id_autor')->references('id_autor')
            ->on('tb_autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
