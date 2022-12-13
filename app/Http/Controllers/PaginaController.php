<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Configuracion;
use App\Models\GaleriaUno;
use App\Models\GaleriaDos;
class PaginaController extends Controller
{
    //
    public function index(){

        $horarios = Horario::all();
        $categorias  = Categoria::all();
        $productos  = Producto::all();
        $configuraciones = Configuracion::all();
        $galeria_uno = GaleriaUno::all();
        $galeria_dos = GaleriaDos::all();
        return view('welcome', compact('horarios','categorias','productos','configuraciones','galeria_uno','galeria_dos'));
    }
}
