<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasUuids;

    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nisn',
        'nama_siswa',
        'jenis_kelamin',
        'tahun_masuk',
    ];
}
