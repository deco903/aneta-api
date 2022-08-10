<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRSubDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('r_sub_district', function (Blueprint $table) {
            $table->foreign(['district_id'], 'r_sub_district_fk')->references(['id'])->on('r_district')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('r_sub_district', function (Blueprint $table) {
            $table->dropForeign('r_sub_district_fk');
        });
    }
}
