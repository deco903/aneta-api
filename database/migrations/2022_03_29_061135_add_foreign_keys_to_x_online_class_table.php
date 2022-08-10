<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXOnlineClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_online_class', function (Blueprint $table) {
            $table->foreign(['class_id'], 'x_online_class_fk')->references(['id'])->on('x_academic_class')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['subjects_id'], 'x_online_class_fk_1')->references(['id'])->on('x_academic_subjects')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_online_class', function (Blueprint $table) {
            $table->dropForeign('x_online_class_fk');
            $table->dropForeign('x_online_class_fk_1');
        });
    }
}
