<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ekstrakulikuler;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ekstrakulikuler::create([
            'nama_eskul' => 'Paskibra SMAN 24 Bandung',
            'pembina' => 'Dedi Kurniawan, S.Pd.',
            'jadwal_latihan' => 'Setiap Rabu & Sabtu 15:30 WIB',
            'deskripsi' => 'Pasukan Pengibar Bendera SMA Negeri 24 Bandung.',
            'gambar' => null,
        ]);

        Ekstrakulikuler::create([
            'nama_eskul' => 'Pramuka',
            'pembina' => 'Pembina Pramuka',
            'jadwal_latihan' => 'Setiap Jumat 15:30 WIB',
            'deskripsi' => 'Kegiatan kepramukaan untuk membentuk kemandirian dan kedisiplinan siswa.',
            'gambar' => null,
        ]);

        Ekstrakulikuler::create([
            'nama_eskul' => 'PMR',
            'pembina' => 'Pembina PMR',
            'jadwal_latihan' => 'Setiap Sabtu 13:00 WIB',
            'deskripsi' => 'Kegiatan Palang Merah Remaja di lingkungan SMA Negeri 24 Bandung.',
            'gambar' => null,
        ]);
    }
}
