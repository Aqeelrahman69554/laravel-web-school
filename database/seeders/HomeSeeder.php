<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home')->insert([
            'tagline' => 'UIN Sunan Kalijaga Yogyakarta',
            'title' => 'Membangun Bangsa, Mendunia dalam Karya',
            'desc_title' => 'Universitas Islam Negeri Sunan Kalijaga berkomitmen dalam integrasi-interkoneksi ilmu agama dan ilmu umum guna mencetak lulusan yang unggul dan terkemuka dalam peradaban.',
            'image' => 'hero-uin-suka.jpg', // Sesuaikan dengan nama file aset Anda
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
