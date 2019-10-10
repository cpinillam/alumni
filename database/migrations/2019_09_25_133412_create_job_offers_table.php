<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('id_users')->nullable();
            $table->integer('id_company')->nullable();
            $table->boolean('validate')->default(false);
            $table->boolean('public')->default(true);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('id_category')->nullable();
            $table->integer('id_language')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('job_offers');
    }
}
