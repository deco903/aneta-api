<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_institutes', function (Blueprint $table) {
            $table->foreign(['state_id'], 'm_institutes_fk')->references(['id'])->on('r_state')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['city_id'], 'm_institutes_fk_1')->references(['id'])->on('r_city')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['district_id'], 'm_institutes_fk_2')->references(['id'])->on('r_district')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['sub_district_id'], 'm_institutes_fk_3')->references(['id'])->on('r_sub_district')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_institutes', function (Blueprint $table) {
            $table->dropForeign('m_institutes_fk');
            $table->dropForeign('m_institutes_fk_1');
            $table->dropForeign('m_institutes_fk_2');
            $table->dropForeign('m_institutes_fk_3');
        });
    }
}
