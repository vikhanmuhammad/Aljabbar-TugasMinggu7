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
        Schema::create('tbhome', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("imageurl", 256);
            $table->string("header", 256);
            $table->string("text", 256);
            $table->bigInteger("no")->nullable();
            $table->string("nama_kendaraan", 256);
            $table->string("nama_daerah", 256);
            $table->string("jam_keberangkatan", 256);
            $table->bigInteger("kuota")->nullable();
            $table->string("stasiun", 256);
            $table->timestamps();
        });

        DB::table('tbhome')->insert([
            [
                'id'=> '1',
                'imageurl' => 'https://images.unsplash.com/photo-1559603108-081ff828517b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Satu platform dan seperangkat teknologi yang terintegrasi, mengelola dan mengembangkan operasional transportasi dan logistik jadi lebih mudah',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '2',
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-putra-rafflesia.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '3',
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-rosalia-indah.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '4',
                'imageurl' => 'https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '5',
                'imageurl' => 'https://assets.kompasiana.com/items/album/2016/06/20/transjakarta-new-logo-57681ea11293733e048b45a3.jpeg?t=o&v=1200',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '6',
                'imageurl' => 'https://awsimages.detik.net.id/content/2009/07/23/4/Garuda-Logo-Vertical-dalam.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '7',
                'imageurl' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/294/2023/10/03/Logo-Whoosh-1902335397.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '8',
                'imageurl' => 'https://plus.unsplash.com/premium_photo-1683120782235-f3082b60c34f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'header' => 'Pantau dan Kendalikan Armada',
                'text' => 'Mudah mengontrol sebaran armada secara real-time dengan solusi telematik yang terhubung dengan dasbor digital. Tingkatkan visibilitas untuk memacu pengambilan keputusan dalam bisnis.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '9',
                'imageurl' => 'https://images.unsplash.com/photo-1604380441509-0ceda4aff0a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'header' => 'Optimasi Operasional Pengiriman',
                'text' => 'Optimalkan setiap tahapan pengiriman mulai dari penjadwalan, pelacakan, bagi lokasi, hingga dokumentasi bukti pengiriman dalam satu platform.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '10',
                'imageurl' => 'https://images.unsplash.com/photo-1583508805133-8fd03a9916d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'header' => 'Efisiensi Rute dengan Perhitungan Cerdas',
                'text' => 'Mudah merencanakan rute terbaik dan tercepat untuk pengiriman multi-drop. Tingkatkan efisiensi waktu dan bahan bakar, serta meminimalkan human error.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '11',
                'imageurl' => 'https://images.unsplash.com/photo-1628915510587-7715c2a8ebc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'header' => 'Alokasi Pengiriman Praktis ke Pengemudi',
                'text' => 'Permudah alokasi pengiriman dan memperbaharui status serta bukti pengiriman melalui aplikasi mobile​.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '12',
                'imageurl' => 'https://images.unsplash.com/photo-1689982920184-2c3ddcf81160?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770',
                'header' => 'Asep',
                'text' => 'Sangat senang menggunakan layanan web monitoring armada dari Transport Berkah Armada! Sistem mereka membantu kami dengan efisiensi dan akurasi dalam melacak keberadaan dan kinerja armada bus kami.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '13',
                'imageurl' => 'https://images.unsplash.com/photo-1696908983765-5ae4722819f2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'header' => 'Lilis',
                'text' => 'Web monitoring armada perusahaan bus Transport Berkah Armada benar-benar memberikan kemudahan dalam mengelola dan melacak keberadaan armada kami.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '14',
                'imageurl' => 'https://images.unsplash.com/photo-1695753640148-0c7b3bcd3b2b?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1770',
                'header' => 'Salwa',
                'text' => 'Saya sangat terkesan dengan layanan web monitoring armada dari Transport Berkah Armada. Dengan bantuan platform ini, saya dapat dengan mudah melacak dan mengelola seluruh armada perusahaan bus kami.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '15',
                'imageurl' => 'https://images.unsplash.com/photo-1695757002354-8bca71d087c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1771&q=80',
                'header' => 'Ayu',
                'text' => 'Saya sangat terkesan dengan layanan web monitoring armada dari Transport Berkah Armada. Dengan platform ini, saya dapat dengan mudah melacak dan memantau lokasi serta keberadaan armada perusahaan bus kami secara real-time.',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '16',
                'imageurl' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307454349522!2d107.6291051108848!3d-6.973006992998587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v16991155036',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => '',
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '17',
                'imageurl' => '',
                'header' => '',
                'text' => '',
                'no' => 1,
                'nama_kendaraan' => 'Tayo',
                'nama_daerah' => 'Bojong San Tos',
                'jam_keberangkatan' => '8:30-10:30',
                'kuota' => 20,
                'stasiun' => 'GKU Parking',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '18',
                'imageurl' => '',
                'header' => '',
                'text' => '',
                'no' => 2,
                'nama_kendaraan' => 'MGI',
                'nama_daerah' => 'Xi And Joer',
                'jam_keberangkatan' => '10:30-12:00',
                'kuota' => 100,
                'stasiun' => 'Lee We Pan Xang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbhome');
    }
};
