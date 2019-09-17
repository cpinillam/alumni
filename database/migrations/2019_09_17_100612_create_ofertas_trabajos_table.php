<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas_trabajos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_users')->nullable();
            $table->integer('id_empresa')->nullable();
            $table->boolean('validado')->default(false);
            $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('id_categoria')->nullable();
            $table->integer('id_lenguajes')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

            /*$table->foreign('id_users')->references('id')->('users');
            $table->foreign('id_empresa')->references('id')->('empresas');
            $table->foreign('id_categorias')->references('id')->('categorias');
            $table->foreign('id_lenguajes')->references('id')->('lenguajes');
            */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas_trabajos');
    }
}
