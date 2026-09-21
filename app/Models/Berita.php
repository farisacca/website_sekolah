<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasUuids;

    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $typeKey = 'string';

    protected $guarded = [];
}
