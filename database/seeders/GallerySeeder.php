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
            ],
            [
                'title' => 'Perpustakaan Ikonik Berstandar Internasional',
                'image' => 'gallery-library.jpg',
            ],
            [
                'title' => 'Laboratorium Terpadu Integrasi-Interkoneksi',
                'image' => 'gallery-lab.jpg',
            ],
            [
                'title' => 'Momen Wisuda di Gedung Multi Purpose',
                'image' => 'gallery-graduation.jpg',
            ],
            [
                'title' => 'Fasilitas Ramah Difabel - Kampus Inklusif',
                'image' => 'gallery-pld.jpg',
            ],
            [
                'title' => 'Masjid Laboratorium Agama Sunan Kalijaga',
                'image' => 'gallery-mosque.jpg',
            ],
        ];

        foreach ($galleries as $item) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('gallery')->insert($item);
        }
    }
}