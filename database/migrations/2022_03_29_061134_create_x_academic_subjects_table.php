<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_subjects', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id')->nullable();
            $table->string('course_name')->nullable();
            $table->integer('course_grade_id')->nullable();
            $table->string('course_code')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('max_student')->nullable()->default(0);
            $table->integer('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_academic_subjects');
    }
}
