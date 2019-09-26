<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VolunteerExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_experiences', function (Blueprint $table) {
            $table->bigIncrements('id_volunteer_experience');
            $table->char('role', 60);
            $table->char('organization', 60);
            $table->date('startDate');
            $table->date('endDate')->nullable;
            $table->string('description', 300);
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
