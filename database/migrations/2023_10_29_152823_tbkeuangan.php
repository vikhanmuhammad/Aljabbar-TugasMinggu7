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
        Schema::create('tbkeuangan', function (Blueprint $table) {
            $table->increments('id_keuangan');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->string('foto_bukti');
            $table->time('jam');
            $table->date('tanggal');
            $table->unsignedInteger('id_armada');
            $table->foreign('id_armada')->references('id_armada')->on('tbarmada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbkeuangan');
    }
};
