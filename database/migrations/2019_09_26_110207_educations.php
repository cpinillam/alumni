<?php

use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Educations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->bigIncrements('id_education');
            $table->char('degree', 60);
            $table->char('school', 60);
            $table->char('field', 60);
            $table->date('startYear');
            $table->date('endYear')->nullable;
            $table->char('description', 300);
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
