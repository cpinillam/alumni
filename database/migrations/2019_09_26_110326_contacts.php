<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id_contact');
            $table->integer('phone')->nullable;
            $table->char('webPage', 60)->nullable;
            $table->char('github', 60);
            $table->char('location', 60)->nullable;
            $table->char('linkedln', 60);
            $table->char('codepen', 60)->nullable;
        });
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
