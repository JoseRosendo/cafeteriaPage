<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriaUno extends Model
{
    protected $table = 'galeria_nosotros';
    protected $primaryKey = 'id';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'imagen',
        'descripcion'
    ];

}
