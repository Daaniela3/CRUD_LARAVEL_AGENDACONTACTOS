<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    protected $table = "mesas";
    protected $keyPrimary = "id";
    protected $fillable = [
        'numeroMesa',
        'tiempoMesa'
        
    ];
}
