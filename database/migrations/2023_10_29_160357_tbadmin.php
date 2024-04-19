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
        Schema::create('tbadmin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('nama_lengkap', 255);
            $table->string('email', 255);
            $table->string('password');
            $table->string('nama_pt', 255);
            $table->string('nama_po', 255);
            $table->string('foto_profil');
            $table->string('jabatan_pekerjaan', 255);
            $table->bigInteger('telepon');
            $table->integer('jumlah_kendaraan');
            $table->string('jenis_bus', 255);
            $table->string('provinsi', 255);
            $table->string('alamat', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbadmin');
    }
};
