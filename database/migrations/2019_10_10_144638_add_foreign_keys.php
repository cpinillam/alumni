<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiences', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('educations', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('volunteers', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('technical_skills', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
           
        });
        Schema::table('soft_skills', function (Blueprint $table) {
            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        }); 
        
        Schema::table('languages', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
           
        });

        Schema::table('posts', function (Blueprint $table) {
            
            $table->bigInteger('post_author_id')->unsigned()->nullable();
            $table->foreign('post_author_id')->references('id')->on('users');
           
        });


        Schema::table('answers', function (Blueprint $table) {
            
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
                ->references('post_id')->on('posts');
            $table->bigInteger('answer_author_id')->unsigned()->nullable();
            $table->foreign('answer_author_id')
                ->references('id')->on('users');
        });

        //

        

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
