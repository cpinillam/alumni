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
            $table->bigIncrements('id_user');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->char('photo', 10)->nullable;
        });
        //! BORRAR ME IM FAMOUS
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
        //! STOP BORRAR
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
