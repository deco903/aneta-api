<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXAcademicSubjectsScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_academic_subjects_schedule', function (Blueprint $table) {
            $table->foreign(['academic_subjects_id'], 'x_academic_course_schedule_fk')->references(['id'])->on('x_academic_subjects')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_academic_subjects_schedule', function (Blueprint $table) {
            $table->dropForeign('x_academic_course_schedule_fk');
        });
    }
}
