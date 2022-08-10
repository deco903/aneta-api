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
        Schema::create('dapodik_provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->integer('id_level_wilayah')->nullable();
            $table->string('mst_kode_wilayah')->nullable();
            $table->string('induk_provinsi')->nullable();
            $table->string('kode_wilayah_induk_provinsi')->nullable();
            $table->string('induk_kabupaten')->nullable();
            $table->string('kode_wilayah_induk_kabupaten')->nullable();
            $table->integer('tk_n')->nullable();
            $table->integer('tk_s')->nullable();
            $table->integer('tk')->nullable();
            $table->integer('kb_n')->nullable();
            $table->integer('kb_s')->nullable();
            $table->integer('kb')->nullable();
            $table->integer('tpa_n')->nullable();
            $table->integer('tpa_s')->nullable();
            $table->integer('tpa')->nullable();
            $table->integer('sps_n')->nullable();
            $table->integer('sps_s')->nullable();
            $table->integer('sps')->nullable();
            $table->integer('pkbm_n')->nullable();
            $table->integer('pkbm_s')->nullable();
            $table->integer('pkbm')->nullable();
            $table->integer('skb_n')->nullable();
            $table->integer('skb_s')->nullable();
            $table->integer('skb')->nullable();
            $table->integer('sd_n')->nullable();
            $table->integer('sd_s')->nullable();
            $table->integer('sd')->nullable();
            $table->integer('smp_n')->nullable();
            $table->integer('smp_s')->nullable();
            $table->integer('smp')->nullable();
            $table->integer('sma_n')->nullable();
            $table->integer('sma_s')->nullable();
            $table->integer('sma')->nullable();
            $table->integer('smk_n')->nullable();
            $table->integer('smk_s')->nullable();
            $table->integer('smk')->nullable();
            $table->integer('slb_n')->nullable();
            $table->integer('slb_s')->nullable();
            $table->integer('slb')->nullable();
            $table->integer('sekolah_n')->nullable();
            $table->integer('sekolah_s')->nullable();
            $table->integer('sekolah')->nullable();
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
        Schema::dropIfExists('dapodik_provinsi');
    }
};
