<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'descripcion', 'categoria'];
    protected $guarded = []; // lo contrario a fillable este dice que NO se debe guardar con asignacion masiva
}
