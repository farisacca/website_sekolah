<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Ekstrakulikuler extends Model
{
    /** @use HasFactory<\Database\Factories\EkstrakulikulerFactory> */
    use HasUuids;

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
