<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['user_role_id'], 'users_fk')->references(['id'])->on('r_user_role')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['user_status_id'], 'users_fk_1')->references(['id'])->on('r_user_status')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['institute_id'], 'users_fk_2')->references(['id'])->on('m_institutes')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_fk');
            $table->dropForeign('users_fk_1');
            $table->dropForeign('users_fk_2');
        });
    }
}
