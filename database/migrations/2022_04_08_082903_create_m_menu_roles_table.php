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
        Schema::create('m_menu_roles', function (Blueprint $table) {
            $table->id();
            $table->integer('menus_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('menus_id')
                  ->references('id')
                  ->on('m_menus')
                  ->onDelete('cascade');
            $table->foreign('role_id')
                  ->references('id')
                  ->on('r_user_role')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_menu_roles');
    }
};
