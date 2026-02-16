<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Class2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title_1' => 'Jalur Masuk Nasional',
                'desc_title_1' => 'UIN Sunan Kalijaga menerima mahasiswa baru melalui berbagai jalur seleksi nasional yang diselenggarakan oleh Kemendikbudristek dan Kemenag RI.',
                'list' => json_encode([
                    'SNBP (Seleksi Nasional Berdasarkan Prestasi)',
                    'SNBT (Seleksi Nasional Berdasarkan Tes)',
                    'SPAN-PTKIN (Prestasi Akademik Keagamaan)',
                    'UM-PTKIN (Ujian Masuk Keagamaan)'
                ]),
            ],
            [
                'title_1' => 'Jalur Mandiri & Internasional',
                'desc_title_1' => 'Kesempatan bagi calon mahasiswa melalui ujian mandiri universitas serta jalur khusus bagi mahasiswa asing (International Student Admission).',
                'list' => json_encode([
                    'Mandiri CBT (Computer Based Test)',
                    'Mandiri Prestasi (Tahfidz, Seni, Olahraga)',
                    'Mandiri Portofolio (Luar Negeri/Difabel)',
                    'Program Beasiswa Kerjasama'
                ]),
            ],
            [
                'title_1' => 'Layanan Akademik Terpadu',
                'desc_title_1' => 'Dukungan penuh bagi mahasiswa untuk memastikan kelancaran studi dengan standar pelayanan prima.',
                'list' => json_encode([
                    'Sistem Informasi Akademik (SIA)',
                    'E-Learning (LMS) Terintegrasi',
                    'Layanan Perpustakaan Digital',
                    'Pusat Layanan Difabel (PLD)'
                ]),
            ]
        ];

        foreach ($data as $item) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('class2')->insert($item);
        }
    }
}