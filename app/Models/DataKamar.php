<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKamar extends Model
{
    use HasFactory;
    protected $table = "data_kamar";
    protected $primaryKey = "id_kamar";
    protected $fillable = [
        'no_kamar',
        'harga',
        'ukuran_kamar',
        'status',
        'jumlah_max_kamar',
        'foto_kamar,',
        'deskripsi',
        'slug_kamar'
    ];
}
