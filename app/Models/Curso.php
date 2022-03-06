<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'descripcion', 'categoria'];
    protected $guarded = []; // lo contrario a fillable este dice que NO se debe guardar con asignacion masiva

    /**
     * Get the route key for the model.
     * Metodo sobreescrito de la clase Model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug'; // de esta forma cogemos slu para las url en lugar del id (por defecto)
    }
}
