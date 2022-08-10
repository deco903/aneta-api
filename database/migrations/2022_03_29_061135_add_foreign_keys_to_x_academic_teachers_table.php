<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXAcademicTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_academic_teachers', function (Blueprint $table) {
            $table->foreign(['academic_year_id'], 'x_academic_teachers_fk')->references(['id'])->on('x_academic_year')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['user_id'], 'x_academic_teachers_fk_1')->references(['id'])->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['teach_class_id'], 'x_academic_teachers_fk_2')->references(['id'])->on('x_academic_class')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_academic_teachers', function (Blueprint $table) {
            $table->dropForeign('x_academic_teachers_fk');
            $table->dropForeign('x_academic_teachers_fk_1');
            $table->dropForeign('x_academic_teachers_fk_2');
        });
    }
}
