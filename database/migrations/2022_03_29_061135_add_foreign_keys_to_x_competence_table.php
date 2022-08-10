<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_competence', function (Blueprint $table) {
            $table->foreign(['academic_year_id'], 'x_competence_detail_fk')->references(['id'])->on('x_academic_year')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['academic_courses_id'], 'x_competence_detail_fk_1')->references(['id'])->on('x_academic_subjects')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['expertise_area_id'], 'x_competence_fk')->references(['id'])->on('r_expertise_area')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['expertise_program_id'], 'x_competence_fk_1')->references(['id'])->on('r_expertise_program')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['skill_compentence_id'], 'x_competence_fk_2')->references(['id'])->on('r_skill_compentence')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_competence', function (Blueprint $table) {
            $table->dropForeign('x_competence_detail_fk');
            $table->dropForeign('x_competence_detail_fk_1');
            $table->dropForeign('x_competence_fk');
            $table->dropForeign('x_competence_fk_1');
            $table->dropForeign('x_competence_fk_2');
        });
    }
}
