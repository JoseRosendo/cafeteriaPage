<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GaleriaUno;
use App\Models\GaleriaDos;
use Livewire\WithFileUploads;
use Illuminate\FilesSystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;

class Galerias extends Component
{
    use WithFileUploads;
    public $galeria_nosotros,$galeria_horarios, $descripcion, $id_galeria, $imagen_antigua;
    public $imagen = '';
    public $image = '';
    public $accion = '';
    public $id_modal = false;
    public $modal = false;
    public function render()
    {
        $this->galeria_nosotros = GaleriaUno::all();
        $this->galeria_horarios = GaleriaDos::all();
        return view('livewire.galerias');
    }
    public function agregarUno(){
        $this->id_modal = false;
        $this->accion = 'nuevo';
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->id_categoria = '';
        $this->descripcion = '';
        $this->imagen = '';
    }
    public function guardarUno(){
        if(! $this->imagen){
            $defaultImg = 'def-img.jpg';
            $image = 'default/' . $defaultImg;
        }
        else{
            $image = $this->imagen->store('galeria_uno');
        }
        GaleriaUno::create([
            'descripcion' => $this->descripcion,
            'imagen'=>$image
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function editarUno($id){
        $galeria_uno = GaleriaUno::findOrFail($id);

        $this->id_galeria = $id;
        $this->descripcion = $galeria_uno->descripcion;
        $this->imagen_antigua = $galeria_uno->imagen;
        $this->accion = 'actualizar';
        $this->abrirModal();
    }
    public function actualizarUno(){
        $this->validarImagen();

        GaleriaUno::find($this->id_galeria)->update([
            'descripcion' => $this->descripcion,
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
        if($this->id_modal  == false){
            $this->image = $this->imagen->store('guardar_uno');
        }else{
            $this->image = $this->imagen->store('guardar_dos');
        }
        return;
    }

    //GALERIA DOS
    pubLic function agregarDos(){
        $this->limpiarCampos();
        $this->accion='nuevo';
        $this->id_modal = true;
        $this->abrirModal();
    }
    public function guardarDos(){
        if(! $this->imagen){
            $defaultImg = 'def-img.jpg';
            $image = 'default/' . $defaultImg;
        }
        else{
            $image = $this->imagen->store('galeria_dos');
        }

        GaleriaDos::create([
            'descripcion' => $this->descripcion,
            'imagen'=>$image
        ]);

        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function editarDos($id){
        $galeria_dos = GaleriaDos::findOrFail($id);

        $this->id_galeria = $id;
        $this->descripcion = $galeria_dos->descripcion;
        $this->imagen_antigua = $galeria_dos->imagen;
        $this->accion = 'actualizar';
        $this->abrirModal();
    }
    public function actualizarDos(){
        $this->validarImagen();

        GaleriaDos::find($this->id_galeria)->update([
            'descripcion' => $this->descripcion,
            'imagen' => $this->image
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
