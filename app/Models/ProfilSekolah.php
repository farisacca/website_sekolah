<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ProfilSekolah extends Model
{
    /** @use HasFactory<\Database\Factories\ProfilSekolahFactory> */
    use HasUuids;

    protected $table = 'profil_sekolah';
    protected $primaryKey = 'id_profil_sekolah';
    public $incrementing = false;
    protected $keyType  = 'string';

    protected $fillable = [
        'nama_sekolah',
        'kepala_sekolah',
        'foto',
        'logo',
        'npsn',
        'alamat',
        'kontak',
        'visi_misi',
        'tahun_berdiri',
        'deskripsi',
    ];
}
