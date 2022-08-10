<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user_profile', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nipd')->nullable();
            $table->integer('user_id');
            $table->string('nisn')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nik')->nullable();
            $table->integer('religion_id')->nullable();
            $table->string('address')->nullable();
            $table->integer('sub_discrict_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->char('zip_code', 6)->nullable();
            $table->integer('residence_type_id')->nullable();
            $table->integer('transportation_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('skhun')->nullable();
            $table->boolean('is_kps')->nullable();
            $table->string('kps_no')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_user_profile');
    }
}
