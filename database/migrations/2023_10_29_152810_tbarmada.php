<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbarmada', function (Blueprint $table) {
            $table->increments('id_armada');
            $table->string('plat_depan');
            $table->integer('nomor_plat');
            $table->string('plat_belakang');
            $table->date('tgl_kir');
            $table->string('julukan');
            $table->string('kelas');
            $table->string('foto_armada');
            $table->integer('jarak_tempuh');
            $table->integer('kapasitas_kursi');
            $table->string('nomor_body');
            $table->string('status');
            $table->string('tempat_awal');
            $table->string('tempat_akhir');
            $table->time('jam_keberangkatan');
            $table->date('tanggal_keberangkatan');
            $table->unsignedInteger('id_driver');
            $table->unsignedInteger('id_helper');
            $table->foreign('id_driver')->references('id_driver')->on('tbdriver');
            $table->foreign('id_helper')->references('id_helper')->on('tbhelper');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbarmada');
    }
};
