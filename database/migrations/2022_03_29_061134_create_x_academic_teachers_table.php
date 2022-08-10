<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_teachers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('teach_class_id')->nullable();
            $table->timestamp('register_date')->nullable();
            $table->integer('teacher_status_id')->nullable();
            $table->boolean('is_online')->nullable();
            $table->string('sk_number')->nullable();
            $table->date('sk_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_academic_teachers');
    }
}
