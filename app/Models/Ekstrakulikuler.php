<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    /** @use HasFactory<\Database\Factories\EkstrakulikulerFactory> */
    use HasFactory;

    protected $table = "ekstrakulikuler";
    protected $primaryKey = "id_eskul";
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_eskul',
        'pembina',
        'jadwal_latihan',
        'deskripsi',
        'gambar',
    ];
}
