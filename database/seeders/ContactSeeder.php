<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
            'title' => 'Hubungi Kami',
            'desc_title' => 'Layanan informasi terpadu UIN Sunan Kalijaga siap membantu Anda terkait informasi akademik, pendaftaran mahasiswa baru, dan kerjasama institusi.',
            'address' => 'Jl. Marsda Adisucipto, Kel. Caturtunggal, Kec. Depok, Kab. Sleman, Yogyakarta 55281',
            'email' => 'humas@uin-suka.ac.id',
            'phone' => '+62 274 512474',
            'open' => 'Senin - Jumat: 07:30 - 16:00 WIB',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}