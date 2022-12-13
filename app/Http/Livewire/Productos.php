<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\FilesSystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use App\Models\Producto;
use App\Models\Categoria;

class Productos extends Component
{
    use WithFileUploads;
    public $productos, $id_producto, $nombre, $descripcion, $precio, $id_categoria;
    public $imagen_antigua;
    public $modal = false;
    public $accion = '';
    public $imagen = '';
    public $image = '';

    public $modalCategoria = false;
    public $categorias, $nombre_categoria, $descripcion_categoria;

    public function render()
    {
        $this->productos = Producto::all();
        $this->categorias = Categoria::all();
        return view('livewire.productos');
    }
    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal(){
        $this->modal = true;
        $this->accion = 'nuevo';
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->cantidad = '';
        $this->precio = '';
        $this->imagen = '';
        $this->id_producto = '';
        $this->id_categoria = '';
    }
    public function guardar(){
         //Primero pregunta -- si el campo imagen viene vacio
        if(! $this->imagen){
            //variable local $defaultImg -- imagen por defecto
            $defaultImg = 'def-img.jpg';
            //$image -- variable local -- ruta de la imagen por defecto
            $image = 'default/' . $defaultImg;
        }
        else{
            //Si hay algo en el campo de imagen -- lo asigna a la variable local y lo guarda en el Store/productos <- Directorio
            $image = $this->imagen->store('productos');
        }
        //Sigue con la funcion -- Crea un nuevo registro con los valores
        Producto::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio'=> $this->precio,
            'imagen'=>$image, //La variable local $image es asignada al campo imagen del modelo
            'categoria_id'=> $this->id_categoria
        ]);
        //Cierra el modal y limpia los campos
        $this->cerrarModal();
        $this->limpiarCampos();
    }

    public function editar($id_producto){
        $producto = Producto::findOrFail($id_producto);

        $this->id_producto = $id_producto;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->precio = $producto->precio;
        $this->id_categoria = $producto->categoria_id;
        $this->abrirModal();
        $this->accion = 'actualizar';
        $this->imagen_antigua = $producto->imagen;
    }
    public function actualizar(){
        $this->validarImagen();

        Producto::find($this->id_producto)->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'categoria_id' => $this->id_categoria,
            'imagen' => $this->image
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function validarImagen(){
        if(!$this->imagen){
            $this->image = $this->imagen_antigua;
            return;
        }
        if($this->imagen){
            Storage::disk('public')->exists('storage/'. $this->imagen_antigua);
            Storage::disk('public')->delete('storage/'. $this->imagen_antigua);
        }
        $this->image = $this->imagen->store('productos');
        return;
    }
    //FUNCIONES PARA LAS CATEGORIAS
    public function abrirModalC(){
        $this->modalCategoria = true;
    }
    public function cerrarModalC(){
        $this->modalCategoria = false;
    }
    public function crearCategoria(){
        $this->abrirModalC();

    }
    public function guardarCategoria(){
        Categoria::create([
            'nombre' => $this->nombre_categoria,
            'descripcion' => $this->descripcion_categoria,
        ]);
        $this->cerrarModalC();
    }
}
