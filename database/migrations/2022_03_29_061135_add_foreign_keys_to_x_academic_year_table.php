<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToXAcademicYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('x_academic_year', function (Blueprint $table) {
            $table->foreign(['institute_id'], 'x_academic_year_fk')->references(['id'])->on('m_institutes')->onUpdate('SET NULL')->onDelete('SET NULL');
            $table->foreign(['created_by'], 'x_academic_year_fk_1')->references(['id'])->on('users')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('x_academic_year', function (Blueprint $table) {
            $table->dropForeign('x_academic_year_fk');
            $table->dropForeign('x_academic_year_fk_1');
        });
    }
}
