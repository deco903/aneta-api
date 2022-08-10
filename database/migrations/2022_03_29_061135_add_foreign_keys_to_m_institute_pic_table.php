<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMInstitutePicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_institute_pic', function (Blueprint $table) {
            $table->foreign(['institute_id'], 'm_institute_pic_fk')->references(['id'])->on('m_institutes')->onUpdate('SET NULL')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_institute_pic', function (Blueprint $table) {
            $table->dropForeign('m_institute_pic_fk');
        });
    }
}
