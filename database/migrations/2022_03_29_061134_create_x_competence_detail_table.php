<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXCompetenceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_competence_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('competence_id')->nullable();
            $table->integer('competence_aspect_id')->nullable();
            $table->integer('competence_type_id')->nullable();
            $table->integer('serial')->nullable()->default(0);
            $table->text('competence_desc')->nullable();
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
        Schema::dropIfExists('x_competence_detail');
    }
}
