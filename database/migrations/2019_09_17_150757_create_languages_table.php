<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_oferta');
            $table->boolean('PHP')->default(false);
            $table->boolean('JavaScript')->default(false);
            $table->boolean('Phyton')->default(false);
            $table->boolean('Ruby')->default(false);
            $table->boolean('C++')->default(false);
            $table->boolean('C#')->default(false);
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
        Schema::dropIfExists('languages');
    }
}
