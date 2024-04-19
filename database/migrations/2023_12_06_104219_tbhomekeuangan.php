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
        Schema::create('tbhomekeuangan', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("imageurl", 256);
            $table->string("header", 256);
            $table->string("text", 256);
            $table->timestamps();
        });

        DB::table('tbhomekeuangan')->insert([
            [
                'id'=> '1',
                'imageurl' => 'https://images.unsplash.com/photo-1627719172038-611c725920bc?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Mengelola keuangan menjadi lebih mudah dengan Grafik Keuangan dan Riwayat Perjalanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '2',
                'imageurl' => 'fa-solid fa-chart-column',
                'header' => 'Grafik Keuangan',
                'text' => 'Membantu untuk memantau keuangan armada dengan menggunakan grafik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '3',
                'imageurl' => 'fa-solid fa-clock-rotate-left',
                'header' => 'Pantau Pemasukan dan Pengeluaran Armada',
                'text' => 'Membantu untuk memantau pemasukan dan pengeluaran armada',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '4',
                'imageurl' => 'https://images.unsplash.com/photo-1561414927-6d86591d0c4f?auto=format&fit=crop&q=80&w=1973&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Pemasukan dan Pengeluaran Armada',
                'text' => 'Fitur Pemasukan dan Pengeluaran Armada membantu menampilkan pemasukan dan pengeluaran armada',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '5',
                'imageurl' => 'https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Grafik Keuangan',
                'text' => 'Fitur Grafik Keuangan membantu menampilkan grafik keuangan armada',
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
        Schema::dropIfExists('tbkeuangan');
    }
};
