<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('webPage')->nullable();
            $table->string('github')->nullable();
            $table->string('location')->nullable();
            $table->string('linkedln')->nullable();
            $table->string('codepen')->nullable();
            $table->timestamps();
            /*$table->bigInteger('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('roles');*/
        });
        /*
        Schema::create('USER_technical_skills_pivot', function (Blueprint $table) {

            $table->integer('id_technical_skill')->unsigned();
            $table->integer('product_id')->unsigned();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->char('skill', 60);
        });
        Schema::create('technical_skills', function (Blueprint $table) {
            $table->bigIncrements('id_technical_skill');
            $table->char('skill', 60);
            $table->enum('level', ['1', '2', '3']);
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
