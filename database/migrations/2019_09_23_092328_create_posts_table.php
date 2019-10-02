<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('post_id')->unique();
            $table->integer('post_author_id')->unsigned()->nullable();
            $table->foreign('post_author_id')
                ->references('id')->on('users');
            $table->string('title', 150);
            $table->string('body', 10000);
            $table->boolean('has_answers')->nullable();
            $table->boolean('is_resolved')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
