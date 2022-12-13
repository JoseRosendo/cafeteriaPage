<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Horarios;

class PaginaWeb extends Component
{
    public $horarios = 0;

    public function render()
    {
        return view('welcome');
    }


}
