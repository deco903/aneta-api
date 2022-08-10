<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_evaluation', function (Blueprint $table) {
            $table->foreign(['academic_year_id'], 'x_evaluation_fk')->references(['id'])->on('x_academic_year')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['student_id'], 'x_evaluation_fk_1')->references(['id'])->on('x_academic_students')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['subjects_id'], 'x_evaluation_fk_2')->references(['id'])->on('x_academic_subjects')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['competence_aspect_id'], 'x_evaluation_fk_3')->references(['id'])->on('r_competence_aspect')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['competence_type_id'], 'x_evaluation_fk_4')->references(['id'])->on('r_competence_type')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['evaluation_type_id'], 'x_evaluation_fk_5')->references(['id'])->on('r_evaluation_type')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_evaluation', function (Blueprint $table) {
            $table->dropForeign('x_evaluation_fk');
            $table->dropForeign('x_evaluation_fk_1');
            $table->dropForeign('x_evaluation_fk_2');
            $table->dropForeign('x_evaluation_fk_3');
            $table->dropForeign('x_evaluation_fk_4');
            $table->dropForeign('x_evaluation_fk_5');
        });
    }
}
