<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_3')->insert([
            'image' => 'uin-profile-landscape.jpg', // Nama file gambar yang ada di folder public/images
            
            // BAGIAN 1: Sejarah dan Identitas
            'title_1' => 'Sejarah Singkat & Visi Integrasi-Interkoneksi',
            'desc_title_1' => 'UIN Sunan Kalijaga Yogyakarta merupakan Perguruan Tinggi Agama Islam Negeri (PTAIN) pertama di Indonesia yang didirikan pada tanggal 26 September 1951. Nama "Sunan Kalijaga" diambil dari salah satu tokoh Walisongo yang dikenal dengan metode dakwahnya yang inklusif dan akomodatif terhadap budaya lokal. 
            
            Sebagai pionir perubahan, UIN Sunan Kalijaga telah bertransformasi dari Institut (IAIN) menjadi Universitas pada tahun 2004. Transformasi ini membawa paradigma keilmuan baru yaitu "Integrasi-Interkoneksi", sebuah konsep yang menjembatani jurang antara ilmu agama (hadlarah an-nash) dan ilmu umum (hadlarah al-ilmu & hadlarah al-falsafah). Kami percaya bahwa kebenaran Tuhan tidak hanya ditemukan dalam teks suci, tetapi juga terpapar luas dalam fenomena alam dan sosial.',

            // BAGIAN 2: Komitmen Akademik & Inklusivitas
            'title_2' => 'Komitmen pada Pendidikan Inklusif dan Unggul',
            'desc_title_2' => 'Saat ini, UIN Sunan Kalijaga telah meraih akreditasi "Unggul" secara nasional dan sedang melangkah menuju rekognisi internasional. Dengan berbagai fakultas mulai dari Adab dan Ilmu Budaya hingga Sains dan Teknologi, kami menyediakan ekosistem belajar yang heterogen dan dinamis. 

            Selain keunggulan akademik, kami bangga menjadi "Kampus Inklusif". Melalui Pusat Layanan Difabel (PLD), UIN Sunan Kalijaga memastikan bahwa pendidikan berkualitas dapat diakses oleh semua lapisan masyarakat tanpa terkecuali. Kampus ini bukan sekadar tempat mengejar gelar, melainkan kawah candradimuka bagi calon pemimpin bangsa yang berwawasan global, moderat dalam beragama, dan ahli di bidang profesionalnya masing-masing. Di sini, tradisi pesantren yang dalam bertemu dengan metodologi riset modern untuk menjawab tantangan zaman.',
            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
