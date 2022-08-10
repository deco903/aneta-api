<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXAcademicClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_academic_class', function (Blueprint $table) {
            $table->foreign(['calss_advisor_id'], 'x_academic_class_fk_1')->references(['id'])->on('x_academic_teachers')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['academic_year_id'], 'x_academic_grade_fk')->references(['id'])->on('x_academic_year')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_academic_class', function (Blueprint $table) {
            $table->dropForeign('x_academic_class_fk_1');
            $table->dropForeign('x_academic_grade_fk');
        });
    }
}
