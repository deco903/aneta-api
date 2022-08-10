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
        Schema::create('m_sub_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('m_menus_id')->unsigned();
            $table->string('sub_menu_label');
            $table->string('sub_menu_endpoint');
            $table->string('sub_menu_icon');
            $table->boolean('is_active')->default(1);
            $table->foreign('m_menus_id')
                  ->references('id')
                  ->on('m_sub_menus')
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
        Schema::dropIfExists('m_sub_menus');
    }
};
