<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXCompetenceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_competence_detail', function (Blueprint $table) {
            $table->foreign(['competence_id'], 'x_competence_detail_fk')->references(['id'])->on('x_competence')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['competence_aspect_id'], 'x_competence_detail_fk_1')->references(['id'])->on('r_competence_aspect')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['competence_type_id'], 'x_competence_detail_fk_2')->references(['id'])->on('r_competence_type')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_competence_detail', function (Blueprint $table) {
            $table->dropForeign('x_competence_detail_fk');
            $table->dropForeign('x_competence_detail_fk_1');
            $table->dropForeign('x_competence_detail_fk_2');
        });
    }
}
