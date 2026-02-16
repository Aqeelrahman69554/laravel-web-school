<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Teacher2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'title' => 'Alumni Berprestasi',
                'coment' => 'Kuliah di UIN Sunan Kalijaga memberikan saya perspektif yang luas tentang bagaimana mengintegrasikan nilai-nilai Islam dengan ilmu pengetahuan modern untuk menjawab tantangan zaman.',
                'image' => 'alumni-1.jpg',
                'name' => 'Drs. H. Ashad Kusuma Jaya',
                'status' => 'Tokoh Masyarakat / Alumni FEBI',
            ],
            [
                'title' => 'Pesan Guru Besar',
                'coment' => 'Kami mendidik mahasiswa tidak hanya untuk menjadi cerdas secara intelektual, tetapi juga memiliki kedalaman spiritual dan karakter inklusif yang menghargai keberagaman.',
                'name' => 'Prof. Dr. Phil. Al Makin, M.A.',
                'image' => 'guru-besar.jpg',
                'status' => 'Guru Besar UIN Sunan Kalijaga',
            ],
            [
                'title' => 'Kesan Mahasiswa Internasional',
                'coment' => 'The inclusive environment and the "Integrasi-Interkoneksi" paradigm at UIN Suka opened my mind to a more moderate and progressive understanding of Islam.',
                'image' => 'student-intl.jpg',
                'name' => 'Ahmed Mansoor',
                'status' => 'International Student (Sudan)',
            ],
        ];

        foreach ($testimonials as $item) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('teacher_2')->insert($item);
        }
    }
}
