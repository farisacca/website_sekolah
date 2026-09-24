<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Guru extends Model
{
    /** @use HasUuids */
    use HasUuids;

    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_guru',
        'nip',
        'mapel',
        'foto',
    ];

    
}
