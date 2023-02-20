<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Atttribute;

class Contrasena extends Model
{
    use HasFactory;

    protected $table = 'contrasena';

    protected function contrasena():attibute{
        return new attribute(

            get:fn($value) => md5($value),
            set:fn($value) => md5($value)
        );
    }
}
