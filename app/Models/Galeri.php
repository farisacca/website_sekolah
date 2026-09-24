<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Galeri extends Model
{
    /** @use HasFactory<\Database\Factories\GaleriFactory> */
    use HasUuids;

    protected $table = "galeri";
    protected $primaryKey = "id_galeri";
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'judul',
        'keterangan',
        'file',
        'kategori',
        'tanggal',
    ];
}
