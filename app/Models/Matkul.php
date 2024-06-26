<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkuls';
    
    protected $fillable = [
        'nama_matkul',
        'jumlah_sks',
        'jam_matkul',
        'ruangan_matkul',
    ];
}
