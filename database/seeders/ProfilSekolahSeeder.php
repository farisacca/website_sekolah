<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;
use Illuminate\Support\Str;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        ProfilSekolah::create([
            'id_profil' => Str::uuid(),
            'nama_sekolah' => 'SMP Negeri1 Singaparna',
            'kepala_sekolah' => ' Drs. Jamaludin Malik, M.M',
            'foto' => 'gedung_sekolah.jpg',
            'logo' => 'logo_sekolah.png',
            'npsn' => '20210822',
            'alamat' => 'Jl. Pancawarna No. 29, Singasari, Kec. Singaparna, Kabupaten Tasikmalaya, Jawa Barat 46412.',
            'kontak' => '021-12345678',
            'visi_misi' => "Visi:\nMenjadi sekolah unggulan yang menghasilkan lulusan berakhlak mulia, cerdas, terampil, inovatif, dan berwawasan lingkungan.\n\nMisi:\n1. Meningkatkan kualitas pendidikan melalui pembelajaran yang inovatif dan kreatif.\n2. Menumbuhkan karakter dan akhlak mulia pada peserta didik.\n3. Mengembangkan keterampilan dan bakat peserta didik melalui kegiatan ekstrakurikuler.\n. Meningkatkan kesadaran lingkungan melalui program-program ramah lingkungan.",
            'tahun_berdiri' =>  1959,
            'deskripsi' => "SMP Negeri 1 Singaparna adalah salah satu institusi pendidikan tingkat pertama negeri tertua dan terkemuka yang berlokasi strategis di pusat ibu kota Kabupaten Tasikmalaya. Sekolah ini berdedikasi tinggi dalam mencetak generasi muda yang berkarakter, mandiri, serta berprestasi di tingkat lokal maupun nasional dengan menerapkan Kurikulum Merdeka" 
        ]);
    }
}
