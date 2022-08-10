<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_evaluation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_year_id')->nullable();
            $table->integer('student_id')->nullable();
            $table->integer('subjects_id')->nullable();
            $table->integer('competence_aspect_id')->nullable();
            $table->integer('competence_type_id')->nullable();
            $table->char('semester', 1)->nullable();
            $table->integer('evaluation_type_id')->nullable();
            $table->decimal('value', 10, 0)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_evaluation');
    }
}
