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
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->float('precio');
            //llaves foraneas --un producto pertenece a una categoria
            $table->integer('categoria_id')->unsigned(1);
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
};
