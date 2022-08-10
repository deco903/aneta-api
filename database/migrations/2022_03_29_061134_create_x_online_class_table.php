<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXOnlineClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_online_class', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->nullable();
            $table->integer('online_class_type')->nullable();
            $table->integer('class_id')->nullable();
            $table->date('online_class_date')->nullable();
            $table->timestamp('online_class_time_start')->nullable();
            $table->timestamp('online_class_time_end')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('online_class_link')->nullable();
            $table->integer('subjects_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x_online_class');
    }
}
