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
        Schema::create('dapodik_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('sekolah_id')->nullable();
            $table->string('npsn')->nullable();
            $table->integer('jumlah_kirim')->nullable();
            $table->integer('ptk')->nullable();
            $table->integer('pegawai')->nullable();
            $table->integer('pd')->nullable();
            $table->integer('rombel')->nullable();
            $table->integer('jml_rk')->nullable();
            $table->integer('jml_lab')->nullable();
            $table->integer('jml_perpus')->nullable();
            $table->string('induk_kecamatan')->nullable();
            $table->string('kode_wilayah_induk_kecamatan')->nullable();
            $table->string('induk_kabupaten')->nullable();
            $table->string('kode_wilayah_induk_kabupaten')->nullable();
            $table->string('induk_provinsi')->nullable();
            $table->string('kode_wilayah_induk_provinsi')->nullable();
            $table->string('bentuk_pendidikan')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->datetime('sinkron_terakhir')->nullable();
            $table->string('sekolah_id_enkrip')->nullable();
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
        Schema::dropIfExists('dapodik_sekolah');
    }
};
