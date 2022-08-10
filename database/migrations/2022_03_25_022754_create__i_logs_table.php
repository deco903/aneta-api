<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('I_logs',function (Blueprint $table) {
            $table->id('log_id');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('company_name');
            $table->string('session_id');
            $table->string('request_method');
            $table->string('log_url');
            $table->text('request_payload');
            $table->text('log_task');
            $table->string('client_ip_address');
            $table->string('client_http_agent');
            $table->timestamp('log_start');
            $table->timestamp('log_end');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_i_logs');
    }
};
