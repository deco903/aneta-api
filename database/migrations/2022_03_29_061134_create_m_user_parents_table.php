<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user_parents', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->char('year_of_birth', 4)->nullable();
            $table->integer('graduate_id')->nullable();
            $table->string('profession')->nullable();
            $table->integer('income_range_id')->nullable();
            $table->string('nik')->nullable();
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
        Schema::dropIfExists('m_user_parents');
    }
}
