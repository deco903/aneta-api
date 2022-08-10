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
        Schema::create('l_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('session_id')->nullable();
            $table->string('request_method')->nullable();
            $table->string('log_url')->nullable();
            $table->text('request_payload')->nullable();
            $table->text('log_task')->nullable();
            $table->string('client_ip_address',45)->nullable();
            $table->string('client_hhtp_agent')->nullable();
            $table->timestamp('log_start')->nullable()->useCurrent();
            $table->timestamp('log_end')->nullable()->useCurrent();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l_logs');
    }
};
