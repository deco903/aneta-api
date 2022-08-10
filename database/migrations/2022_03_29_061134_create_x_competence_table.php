<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_competence', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id')->nullable();
            $table->integer('academic_courses_id')->nullable();
            $table->integer('expertise_area_id')->nullable();
            $table->integer('expertise_program_id')->nullable();
            $table->integer('skill_compentence_id')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->string('class')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_competence');
    }
}
