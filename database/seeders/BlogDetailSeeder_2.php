<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogDetailSeeder_2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_detail_2')->insert([
            'image_1' => 'rektor-uin-suka.jpg',
            'name' => 'Prof. Dr. Phil. Al Makin, M.A.',
            'message' => 'UIN Sunan Kalijaga adalah rumah bagi keberagaman. Di sini, kita tidak hanya belajar ilmu pengetahuan, tetapi juga belajar bagaimana menjadi manusia yang menghargai perbedaan melalui kacamata Integrasi-Interkoneksi.',
            
            'title_1' => 'Fasilitas Akademik Unggulan',
            'list_title_1' => 'Perpustakaan Digital, Laboratorium Terpadu, Pusat Layanan Difabel',
            
            'image_2' => 'gedung-pld-uin.jpg',
            'title_2' => 'Komitmen pada Pendidikan Inklusif',
            'desc_title_2' => 'Sebagai pionir kampus inklusif di Indonesia, UIN Sunan Kalijaga menyediakan fasilitas aksesibel dan pendampingan khusus melalui Pusat Layanan Difabel (PLD). Kami percaya bahwa pendidikan berkualitas adalah hak setiap warga negara tanpa terkecuali, menjadikannya model bagi perguruan tinggi lain di Asia Tenggara.',
            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}