<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'id_horario';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'dia',
        'hora_apertura',
        'hora_descanso',
        'hora_reapertura',
        'hora_cierre'
    ];

}
