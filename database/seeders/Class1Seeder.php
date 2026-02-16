<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Class1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'title_1' => 'Fakultas Sains dan Teknologi',
                'image' => 'saintek.jpg',
                'title_2' => 'Informatika & Sains Alam',
                'desc_title_2' => 'Mengintegrasikan ilmu sains dengan nilai keislaman untuk menghasilkan inovasi teknologi yang bermanfaat bagi masyarakat.',
                'age' => 'Lulusan SMA/MA',
                'seats' => '40 - 60 Kursi',
                'time' => '07:30 - 15:00',
                'fee' => 'UKT Kelompok 1-7',
            ],
            [
                'title_1' => 'Fakultas Ekonomi dan Bisnis Islam',
                'image' => 'febi.jpg',
                'title_2' => 'Perbankan Syariah & Ekonomi',
                'desc_title_2' => 'Mencetak profesional di bidang ekonomi yang memegang teguh prinsip syariah dan etika bisnis global.',
                'age' => 'Lulusan SMA/MA',
                'seats' => '80 - 100 Kursi',
                'time' => '07:30 - 16:00',
                'fee' => 'UKT Kelompok 1-7',
            ],
            [
                'title_1' => 'Fakultas Ilmu Tarbiyah dan Keguruan',
                'image' => 'tarbiyah.jpg',
                'title_2' => 'Pendidikan Agama & Guru',
                'desc_title_2' => 'Fakultas tertua yang berfokus pada pengembangan metodologi pengajaran dan pendidikan karakter berbasis Islam.',
                'age' => 'Lulusan SMA/MA',
                'seats' => '100+ Kursi',
                'time' => '07:00 - 14:30',
                'fee' => 'UKT Kelompok 1-7',
            ],
        ];

        foreach ($classes as $class) {
            $class['created_at'] = Carbon::now();
            $class['updated_at'] = Carbon::now();
            DB::table('class1')->insert($class);
        }
    }
}
