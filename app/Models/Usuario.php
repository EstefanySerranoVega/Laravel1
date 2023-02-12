<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Atttribute;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected  function nombre_usuario():attribute{
        return new attribute(
            
            get:fn($value) => ucwords($value),

            set:fn($value) => strtolower($value)
    );

    }
}
