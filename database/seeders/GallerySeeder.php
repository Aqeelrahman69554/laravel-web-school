<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Gedung Rektorat (PAU) UIN Sunan Kalijaga',
                'image' => 'gallery-pau.jpg',
                'category' => 'pergedungan',
            ],
            [
                'title' => 'Perpustakaan Ikonik Berstandar Internasional',
                'image' => 'gallery-library.jpg',
                'category'=> 'pergedungan',
            ],
            [
                'title' => 'Laboratorium Terpadu Integrasi-Interkoneksi',
                'image' => 'gallery-lab.jpg',
                'category'=> 'pergedungan',
            ],
            [
                'title' => 'Momen Wisuda di Gedung Multi Purpose',
                'image' => 'gallery-graduation.jpg',
                'category'=> 'prestasi',
            ],
            [
                'title' => 'Fasilitas Ramah Difabel - Kampus Inklusif',
                'image' => 'gallery-pld.jpg',
                'category'=> 'pergedungan',
            ],
            [
                'title' => 'Masjid Laboratorium Agama Sunan Kalijaga',
                'image' => 'gallery-mosque.jpg',
                'category'=> 'pergedungan',
            ],
        ];

        foreach ($galleries as $item) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('gallery')->insert($item);
        }
    }
}
