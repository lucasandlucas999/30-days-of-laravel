<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    /** @use HasFactory<\Database\Factories\TesteFactory> */
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'edad', 'puntaje', 'direccion'];
}
