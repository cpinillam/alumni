<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //! Refactoring with Foreign K https://www.larashout.com/introducing-one-to-many-relationship-in-laravel
        Schema::create('answers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('answer_id')->unique();
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')
                ->references('post_id')->on('posts');
            $table->integer('answer_author_id')->unsigned()->nullable();
            $table->foreign('answer_author_id')
                ->references('id')->on('users');
            $table->boolean('is_best_answer')->nullable();
            $table->string('body', 2000);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('answers');
    }
}
