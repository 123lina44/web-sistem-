<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narasi extends Model
{
    use HasFactory;
    protected $table = "narasi";
    protected $primaryKey = "id_narasi";
    protected $fillable = [
        'narasi'
    ];
}
