<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_oferta');
            $table->boolean('Front-End')->default(false);
            $table->boolean('Back-End')->default(false);
            $table->boolean('Full-Stack')->default(false);
            $table->boolean('UI/UX')->default(false);
            $table->boolean('MachineLearnig')->default(false);
            $table->boolean('Big-Data')->default(false);
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
        Schema::dropIfExists('categories');
    }
}
