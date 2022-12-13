<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriaDos extends Model
{
    protected $table = 'galeria_horarios';
    protected $primaryKey = 'id';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'imagen',
        'descripcion'
    ];
}
