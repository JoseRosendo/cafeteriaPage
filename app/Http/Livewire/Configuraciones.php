<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Configuracion;
use Illuminate\FilesSystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
class Configuraciones extends Component
{
    public $configuraciones;
    public $config;
    public $id_empresa, $descripcion, $descripcionNew, $logo, $icono, $logo_antiguo, $icono_antiguo;
    public $descripcion_actualizado, $logo_actualizado, $icono_actualizado;
    public $textA = false;

    use WithFileUploads;

    public function render()
    {
        $this->configuraciones = Configuracion::all();
        $this->traerDatos();
        return view('livewire.configuraciones');
    }
    public function traerDatos()
    {
        $this->config = Configuracion::findOrFail(1);
        $this->descripcion = $this->config->descripcion;
        $this->logo_antiguo = $this->config->logo;
        $this->icono_antiguo = $this->config->icono;         
    }
    public function changeDes(){
        if($this->textA == true){
            $this->textA =false;
            $this->descripcionNew = '';
        }
        else{
            $this->textA = true;
        }
    }

    public function actualizarInfo(){
        $this->validarDescripcion();
        $this->validarLogo();
        $this->validarIcono();

        Configuracion::find(1)->update([
            'descripcion' => $this->descripcion_actualizado,
            'logo' => $this->logo_actualizado,
            'icono' => $this->icono_actualizado
        ]);

        $this->descripcionNew = '';
        $this->logo = '';
        $this->icono = '';
    }

    public function validarDescripcion(){
        if(!$this->descripcionNew){
            $this->descripcion_actualizado = $this->config->descripcion;
        }
        else{
            $this->descripcion_actualizado = $this->descripcionNew;
        }
    }
    public function validarLogo(){
        if(!$this->logo){
            $this->logo_actualizado = $this->logo_antiguo;
        }
        else{
            $this->logo_actualizado = $this->logo->store('configuraciones');
        }
    }
    public function validarIcono(){
        if(!$this->icono){
            $this->icono_actualizado = $this->icono_antiguo;
        }
        else{
            $this->icono_actualizado = $this->icono->store('configuraciones');
        }
    }
}
