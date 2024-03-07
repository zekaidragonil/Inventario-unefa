<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'laboratorio',
        'mesa',
        'nombre',
        'modelo',
        'marca',
        'serial',
        'imagen',
        'comentario'
    ];

}
