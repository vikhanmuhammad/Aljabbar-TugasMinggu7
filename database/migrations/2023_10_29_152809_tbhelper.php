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
        Schema::create('tbhelper', function (Blueprint $table) {
            $table->increments('id_helper');
            $table->string('nama_helper', 255);
            $table->string('email')->unique();
            $table->date('tgl_lahir');
            $table->string('foto_profile');
            $table->bigInteger('nik');
            // $table->unsignedInteger('id_armada'); // Menambah kolom untuk foreign key
            // $table->foreign('id_armada')->references('id_armada')->on('tbarmada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbhelper');
    }
};
