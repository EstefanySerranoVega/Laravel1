<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Atttribute;

class Producto extends Model
{
    use HasFactory;

    protected  $table = 'producto';
}
