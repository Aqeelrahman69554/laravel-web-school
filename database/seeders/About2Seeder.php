<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class About2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'icon' => 'flaticon-033-blocks', // Sesuaikan dengan class icon di template Anda
                'title' => 'Dedikatif',
                'desc_title' => 'Seluruh civitas akademika berdedikasi tinggi dalam mencetak generasi unggul berbasis nilai keislaman.',
            ],
            [
                'icon' => 'flaticon-038-locker',
                'title' => 'Amanah',
                'desc_title' => 'Menjaga kepercayaan masyarakat dalam mengelola pendidikan tinggi yang berintegritas dan transparan.',
            ],
            [
                'icon' => 'flaticon-032-book',
                'title' => 'Mutu',
                'desc_title' => 'Berkomitmen pada standar kualitas internasional dalam riset, pengajaran, dan pengabdian.',
            ],
            [
                'icon' => 'flaticon-047-backpack',
                'title' => 'Akuntabel',
                'desc_title' => 'Setiap program dan kebijakan dapat dipertanggungjawabkan demi kemajuan peradaban bangsa.',
            ],
        ];

        foreach ($features as $feature) {
            $feature['created_at'] = Carbon::now();
            $feature['updated_at'] = Carbon::now();
            DB::table('about_2')->insert($feature);
        }
    }
}
