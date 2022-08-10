<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_user_profile', function (Blueprint $table) {
            $table->foreign(['user_id'], 'm_user_profile_fk')->references(['id'])->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['religion_id'], 'm_user_profile_fk_1')->references(['id'])->on('r_religion')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['state_id'], 'm_user_profile_fk_2')->references(['id'])->on('r_state')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['city_id'], 'm_user_profile_fk_3')->references(['id'])->on('r_city')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['district_id'], 'm_user_profile_fk_4')->references(['id'])->on('r_district')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['sub_discrict_id'], 'm_user_profile_fk_5')->references(['id'])->on('r_sub_district')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['residence_type_id'], 'm_user_profile_fk_6')->references(['id'])->on('r_residence_type')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['transportation_id'], 'm_user_profile_fk_7')->references(['id'])->on('r_transportation_type')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_user_profile', function (Blueprint $table) {
            $table->dropForeign('m_user_profile_fk');
            $table->dropForeign('m_user_profile_fk_1');
            $table->dropForeign('m_user_profile_fk_2');
            $table->dropForeign('m_user_profile_fk_3');
            $table->dropForeign('m_user_profile_fk_4');
            $table->dropForeign('m_user_profile_fk_5');
            $table->dropForeign('m_user_profile_fk_6');
            $table->dropForeign('m_user_profile_fk_7');
        });
    }
}
