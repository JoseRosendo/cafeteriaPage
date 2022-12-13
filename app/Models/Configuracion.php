<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuracion extends Model
{
    protected $table = 'configuraciones';
    protected $primaryKey = 'id_empresa';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'logo',
        'icono',
        'descripcion',
        'historia'
    ];
}
