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
        Schema::create('tbselengkapnya', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("imageurl", 256);
            $table->string("header", 256);
            $table->string("text", 256);
            $table->timestamps();
        });

        DB::table('tbselengkapnya')->insert([
            [
                'id'=> '1',
                'imageurl' => 'https://images.unsplash.com/photo-1494515843206-f3117d3f51b7?auto=format&fit=crop&q=80&w=2072&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Segera nikmati kemudahan perjalanan dengan aplikasi ticketing bis kami. Pilih, bayar, dan berangkat, semua dalam genggaman Anda!',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '2',
                'imageurl' => 'fa-solid fa-globe fa-5x',
                'header' => 'Monitor Armada',
                'text' => 'Fitur monitor armada memungkinkan perusahaan melacak lokasi kendaraan secara real-time dan mencatat informasi seperti kecepatan, jarak, waktu dan rute setiap kendaraan. Fitur ini berguna untuk mengawasi penggunaan armada dan memastikan operasional berjalan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '3',
                'imageurl' => 'fa-solid fa-file-invoice-dollar fa-5x',
                'header' => 'Pengingat Registrasi Armada',
                'text' => 'Fitur pengingat registrasi berguna untuk melacak tanggal kadaluarsa pajak, kir, dan perizinan lainnya dari setiap kendaraan. Sistem akan mengirimkan notifikasi ke admin sebelum batas waktu agar proses perpanjangan berjalan lancar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '4',
                'imageurl' => 'fa-solid fa-money-bill-1-wave fa-5x',
                'header' => 'Manajemen Keuangan',
                'text' => 'Fitur manajemen keuangan mencatat semua pengeluaran armada seperti biaya bahan bakar, servis berkala, tol, parkir dan biaya operasional lainnya. Laporan keuangan terperinci dihasilkan untuk membantu analisis dan mengontrol biaya operasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbselengkapnya');
    }
};
