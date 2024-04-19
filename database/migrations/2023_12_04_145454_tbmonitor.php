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
        Schema::create('tbmonitor', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("imageurl", 256);
            $table->string("header", 256);
            $table->string("text", 256);
            $table->timestamps();
        });

        DB::table('tbmonitor')->insert([
            [
                'id'=> '1',
                'imageurl' => 'https://images.unsplash.com/photo-1618805154647-7d89ac05926b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Tingkatkan Efektivitas Manajemen dan Reputasi Perusahaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '2',
                'imageurl' => 'fa-solid fa-location-dot',
                'header' => 'Mempermudah monitor armada',
                'text' => 'Kecepatan, lokasi, dan rute armada terlihat secara langsung dari TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '3',
                'imageurl' => 'fa-solid fa-briefcase',
                'header' => 'Monitor kinerja driver',
                'text' => 'Perilaku driver termonitor dari TBA secara langsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '4',
                'imageurl' => 'https://images.unsplash.com/photo-1548345680-f5475ea5df84?auto=format&fit=crop&q=80&w=2073&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Pantau lokasi dan keberadaan armada',
                'text' => 'Fitur GPS membantu menampilkan letak keberadaan armada',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '5',
                'imageurl' => 'https://images.unsplash.com/photo-1585583416718-5bea75d5312a?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Pantau lokasi dan keberadaan driver',
                'text' => 'Fitur GPS membantu menampilkan letak keberadaan driver',
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
        Schema::dropIfExists('tbmonitor');
    }
};
