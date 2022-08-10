<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_students', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id');
            $table->integer('user_id')->nullable();
            $table->timestamp('register_date')->nullable();
            $table->integer('student_status_id')->nullable();
            $table->integer('class_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_academic_students');
    }
}
