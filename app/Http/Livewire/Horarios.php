<?php

namespace App\Http\Livewire;

use Livewire\Component;
//MODELOS
use App\Models\Horario;
class Horarios extends Component
{
    //variable para abrir el modal
    public $modal = true;
    public $id_horario, $dia, $hora_apertura, $hora_descanso, $hora_reapertura, $hora_cierre;

    public function render()
    {
        return view('livewire.horarios',['horarios' => Horario::all()]);
    }
    public function abrirModal(){
        $this->modal = true;
        $this->limpiarCampos();
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){

    }
    public function guardar(){
        //Lo unico que hace es enviar los datos de los inputs y si la id_categoria ya existe lo actualiza
        
        Horario::updateOrCreate(['id_horario' => $this->id_horario],[
            'dia' => $this->dia,
            'hora_apertura' => $this->hora_apertura,
            'hora_descanso' => $this->hora_descanso,
            'hora_reapertura' => $this->hora_reapertura,
            'hora_cierre' => $this->hora_cierre
        ]);
        //Envia un mensaje despues de guardar --- Si exista la id o si no existia
        session()->flash('success',$this->id_horario ? 'Se guardaron los cambios' : 'Hay un nuevo registro');
        $this->cerrarModal();
    }   
}
