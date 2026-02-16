<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogGridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title_1' => 'Prestasi Internasional',
                'image' => 'news-prestasi.jpg',
                'subtitle' => 'Mahasiswa UIN Suka Raih Gold Medal di Ajang Internasional',
                'desc_subtitle' => 'Delegasi mahasiswa UIN Sunan Kalijaga berhasil menyabet medali emas dalam kompetisi inovasi teknologi tingkat Asia di Kuala Lumpur.',
            ],
            [
                'title_1' => 'Riset & Teknologi',
                'image' => 'news-riset.jpg',
                'subtitle' => 'Penerapan Artificial Intelligence dalam Studi Filologi Islam',
                'desc_subtitle' => 'Dosen Fakultas Saintek mengembangkan sistem AI untuk mendigitalisasi dan menerjemahkan manuskrip kuno Nusantara secara otomatis.',
            ],
            [
                'title_1' => 'Pengabdian Masyarakat',
                'image' => 'news-kkn.jpg',
                'subtitle' => 'Program KKN Tematik: Membangun Desa Inklusif Ramah Difabel',
                'desc_subtitle' => 'Melalui Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM), mahasiswa diterjunkan untuk menginisiasi desa percontohan inklusif.',
            ],
            [
                'title_1' => 'Moderasi Beragama',
                'image' => 'news-moderasi.jpg',
                'subtitle' => 'Workshop Global: Harmoni dalam Keberagaman Budaya',
                'desc_subtitle' => 'UIN Sunan Kalijaga menjadi tuan rumah konferensi internasional yang membahas peran agama dalam menjaga perdamaian dunia.',
            ],
        ];

        foreach ($blogs as $blog) {
            $blog['created_at'] = Carbon::now();
            $blog['updated_at'] = Carbon::now();
            DB::table('blog_grid')->insert($blog);
        }
    }
}
