<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_detail')->insert([
            'title_1' => 'UIN Sunan Kalijaga Menuju World Class University',
            'image_1' => 'artikel-internasional-1.jpg',
            'desc_title_1' => 'Sebagai universitas Islam negeri pertama di Indonesia yang meraih akreditasi internasional secara masif, UIN Sunan Kalijaga terus memperkuat jejaring global. Fokus utama saat ini adalah memastikan seluruh program studi memiliki standar kualitas yang diakui oleh lembaga internasional seperti FIBAA dan AUN-QA.',
            
            'title_2' => 'Integrasi Keilmuan sebagai Kunci Inovasi',
            'desc_title_2' => 'Paradigma "Integrasi-Interkoneksi" bukan sekadar slogan, melainkan metode ilmiah yang diterapkan dalam setiap riset. Dengan memadukan teks suci dengan sains modern, civitas akademika mampu melahirkan solusi bagi permasalahan kontemporer, mulai dari etika teknologi hingga ekonomi syariah inklusif.',
            'image_2' => 'artikel-internasional-2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}