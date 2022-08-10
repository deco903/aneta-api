<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_class', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id')->nullable();
            $table->string('class')->nullable();
            $table->string('sub_class')->nullable();
            $table->string('sub_sub_class')->nullable();
            $table->string('class_location')->nullable();
            $table->integer('calss_advisor_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_academic_class');
    }
}
