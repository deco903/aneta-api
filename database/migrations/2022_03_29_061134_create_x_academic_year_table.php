<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXAcademicYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_academic_year', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('uuid');
            $table->integer('institute_id')->nullable();
            $table->string('academic_year')->nullable();
            $table->date('periode_start')->nullable();
            $table->date('periode_end')->nullable();
            $table->char('is_active', 1)->nullable()->default('1');
            $table->integer('number_of_student')->nullable()->default(0);
            $table->integer('number_of_teachers')->nullable()->default(0);
            $table->integer('number_of_staff')->nullable()->default(0);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
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
        Schema::dropIfExists('x_academic_year');
    }
}
