<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio',
        'categoria_id'
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id','id_categoria')->withTrashed();
    }
}
