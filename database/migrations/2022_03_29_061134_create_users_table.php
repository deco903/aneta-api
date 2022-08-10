<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('user_role_id')->nullable();
            $table->integer('user_status_id')->nullable();
            $table->softDeletes();
            $table->timestamp('last_login_at')->nullable();
            $table->string('reset_password_token', 100)->nullable();
            $table->char('verify_code', 6)->nullable();
            $table->timestamp('expired_password_at')->nullable();
            $table->uuid('uuid')->nullable()->default(Str::uuid()->toString());
            $table->integer('institute_id')->nullable();
            $table->text('social_id')->nullable();
            $table->text('social_type')->nullable();
            $table->text('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
