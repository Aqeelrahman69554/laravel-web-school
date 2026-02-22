<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'title_1' => 'Tenaga Pendidik',
                'image' => 'rektor-uin.jpg',
                'twiter' => 'https://twitter.com/uinsk',
                'linkedin' => 'https://linkedin.com/school/uin-sunan-kalijaga',
                'facebook' => 'https://facebook.com/uinsk',
                'name' => 'Prof. Dra. Hj. Siti Ruhaini Dzuhayatin, M.A.', // Contoh Guru Besar/Pimpinan
                'status' => 'Rektor UIN Sunan Kalijaga',
            ],
            [
                'title_1' => 'Tenaga Pendidik',
                'image' => 'dosen-1.jpg',
                'twiter' => '#',
                'linkedin' => '#',
                'facebook' => '#',
                'name' => 'Dr. H. Ahmad Bahiej, S.H., M.Hum.',
                'status' => 'Wakil Rektor Bidang Akademik',
            ],
            [
                'title_1' => 'Tenaga Pendidik',
                'image' => 'dosen-2.jpg',
                'twiter' => '#',
                'linkedin' => '#',
                'facebook' => '#',
                'name' => 'Prof. Dr. Phil. Al Makin, M.A.',
                'status' => 'Guru Besar Sejarah Peradaban Islam',
            ],
            [
                'title_1' => 'Tenaga Pendidik',
                'image' => 'dosen-3.jpg',
                'twiter' => '#',
                'linkedin' => '#',
                'facebook' => '#',
                'name' => 'Dr. Mochamad Sodik, S.Sos., M.Si.',
                'status' => 'Dekan Fakultas Ilmu Sosial dan Humaniora',
            ],
        ];

        foreach ($teachers as $teacher) {
            $teacher['created_at'] = Carbon::now();
            $teacher['updated_at'] = Carbon::now();
            DB::table('teacher')->insert($teacher);
        }
    }
}
