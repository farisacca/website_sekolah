<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Siswa::create([
            'id_siswa' => Str::uuid(),
            'nisn' => '123456787',
            'nama_siswa' => 'Parisa nur esa',
            'jenis_kelamin' => 'Perempuan',
            'tahun_masuk' => 2024,
        ]);

        Siswa::create([
            'id_siswa' => Str::uuid(),
            'nisn' => '87654321',
            'nama_siswa' => 'Agni Anisa',
            'jenis_kelamin' => 'Perempuan',
            'tahun_masuk' => 2024,
        ]);
    }
}
