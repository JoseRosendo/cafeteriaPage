<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
