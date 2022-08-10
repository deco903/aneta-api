<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicSubjectsScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_subjects_schedule', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_subjects_id')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->integer('max_student')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_academic_subjects_schedule');
    }
}
