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
        // Schema::create('tbadmin', function (Blueprint $table) {
        //     $table->id('id_admin');
        //     $table->string('nama_lengkap', 255);
        //     $table->string('email', 255);
        //     $table->string('nama_perusahaan', 255);
        //     $table->string('jabatan_pekerjaan', 255);
        //     $table->integer('telepon');
        //     $table->integer('jumlah_kendaraan');
        //     $table->string('jenis_bus', 255);
        //     $table->string('provinsi', 255);
        //     $table->string('alamat', 255);
        //     $table->timestamps('created_at');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('tbadmin');
    }
};
