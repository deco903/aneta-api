<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXAcademicSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_academic_subjects', function (Blueprint $table) {
            $table->foreign(['academic_year_id'], 'x_academic_courses_fk')->references(['id'])->on('x_academic_year')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['created_by'], 'x_academic_courses_fk_1')->references(['id'])->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['course_grade_id'], 'x_academic_courses_fk_2')->references(['id'])->on('x_academic_class')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_academic_subjects', function (Blueprint $table) {
            $table->dropForeign('x_academic_courses_fk');
            $table->dropForeign('x_academic_courses_fk_1');
            $table->dropForeign('x_academic_courses_fk_2');
        });
    }
}
