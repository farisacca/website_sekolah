<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use Illuminate\Support\Str;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Aam Amaliya, S.Pd.',
            'nip' => '123456789',
            'mapel' => 'Bahasa Sunda',
            'foto' => 'aam_amelia.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Ahmad Fariyani, S.Pd.',
            'nip' => '987654321',
            'mapel' => 'Pendidikan Jasmani, Prakarya',
            'foto' => 'ahmad_fariyani.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Bella Amelia, S.Pd.',
            'nip' => '456789123',
            'mapel' => 'Bimbingan Penyuluhan dan Konseling',
            'foto' => 'bella_amelia.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Bubung Burhaeni, S.Pd.',
            'nip' => '789123456',
            'mapel' => 'Seni Budaya',
            'foto' => 'bubung_buhaeni.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Budi Purnomo, S.Pd.Kons.,M.M',
            'nip' => '321654987',
            'mapel' => 'Bimbingan Penyuluhan dan Konseling',
            'foto' => 'budi_purnomo.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Desti Purnama Sari, S.Pd.,M.Pd.',
            'nip' => '654987321',
            'mapel' => 'Pendidikan Agama Islam',
            'foto' => 'desti.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Dewi Hendrawati, S.Pd.',
            'nip' => '147258369',
            'mapel' => 'Matematika',
            'foto' => 'dewi_hendrawati.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Diki, M.Pd.',
            'nip' => '258369147',
            'mapel' => 'Ilmu Pengetahuan Sosial, TIK',
            'foto' => 'diki.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Dra.Hj.Iis Islaeni Kurniasih',
            'nip' => '369147258',
            'mapel' => 'Bimbingan Penyuluhan dan Konseling',
            'foto' => 'iis_isleni.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Dra. Hj. Nina Budiani',
            'nip' => '369147258',
            'mapel' => 'Bimbingan Penyuluhan dan Konseling',
            'foto' => 'nina_budiani.png',
        ]);

        Guru::create([
            'id_guru' => Str::uuid(),
            'nama_guru' => 'Drs. H. Asep Sumiarsa, M.Pd.',
            'nip' => '369147258',
            'mapel' => 'Ilmu Pengetahuan Sosial',
            'foto' => 'asep_sumiarsa.png',
        ]);

    }
}
