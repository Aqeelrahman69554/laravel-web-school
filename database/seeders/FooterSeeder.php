<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footer')->insert([
            'title' => 'UIN Sunan Kalijaga Yogyakarta',
            'desc_title' => 'UIN Sunan Kalijaga adalah lembaga pendidikan tinggi Islam yang berkomitmen pada pengembangan ilmu pengetahuan, teknologi, dan seni yang berlandaskan nilai-nilai Islam.',
            'address' => 'Jl. Laksda Adisucipto, Papringan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
            'email' => 'info@uin-suka.ac.id',
            'phone' => '(0274) 512474',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
