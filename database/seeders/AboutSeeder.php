<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyesuaikan list dengan poin keunggulan UIN Suka
        $listData = [
            'Akreditasi Unggul secara Nasional (BAN-PT)',
            'Sertifikasi Internasional FIBAA dan AUN-QA',
            'Penerapan Kurikulum Berbasis Integrasi-Interkoneksi',
            'Fasilitas Kampus Inklusif dan Ramah Difabel'
        ];

        DB::table('about')->insert([
            'image_1' => 'gedung-rektorat.jpg',
            'image_2' => 'perpustakaan-uin.jpg',
            'title' => 'Universitas Islam Negeri Pertama di Indonesia',
            'desc_title' => 'UIN Sunan Kalijaga merupakan institusi pendidikan tinggi Islam terkemuka yang memadukan keilmuan agama dengan sains secara harmonis. Sebagai "World Class University", kami berdedikasi untuk mencetak sarjana yang moderat, inovatif, dan mampu menjawab tantangan global.',
            'list' => json_encode($listData),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
