<div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <!-- Cabecera de la página -->
                <div class="flex justify-between">
                    <!-- Botón para crear un nuevo registro -->
                    <div class="flex py-2 px-4">
                        @if ($id_modal == false)
                            <button
                            type="button"
                            wire:click.prevent="agregarUno()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                            >Agregar</button>
                        @else
                            <button
                            type="button"
                            wire:click.prevent="agregarDos()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                            >Agregar</button>
                        @endif
                    </div>
                    <div class="flex justify-center">
                        <div class="form-check form-switch">
                            <label class="form-check-label  text-gray-800" for="">Galeria 1</label>
                            <input wire:model="id_modal" class="form-check-input appearance-none w-9 rounded-full h-5 align-top bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" role="switch" id="">
                            <label class="form-check-label  text-gray-800" for="">Galeria 2</label>
                        </div>
                    </div>
                </div>
                @if ($modal)
                    @include('livewire.forms.form-galerias')
                @endif
                <table class="table-fixed w-full text-center">
                    <tr class="bg-gray-900 text-white">
                        <th class="px-4 py-2 w-8 rounded-tl-md">ID</th>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2 rounded-tr-md">Acciones</th>
                    </tr>
                    <tbody>
                        @if ($id_modal == false)
                            @foreach( $galeria_nosotros as $gn)
                                <tr>
                                    <td class="border px-4 py-2 w-8">{{$gn->id}}</td>
                                    <td class="border px-4 py-2 w-8">
                                        <img src="/storage/{{$gn->imagen}}" class="w-16 h-18 rounded-md shadow-md">
                                    </td>
                                    <td class="border px-4 py-2 w-8">{{$gn->descripcion}}</td>
                                    <td class="border px-4 py-2 w-8">
                                        <button
                                            type="button"
                                            wire:click="editarUno({{$gn->id}})"
                                            data-mdb-ripple="true"
                                            data-mdb-ripple-color="light"
                                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                                        >Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        @if($id_modal == true)
                            @foreach( $galeria_horarios as $gh)
                                <tr>
                                    <td class="border px-4 py-2 w-8">{{$gh->id}}</td>
                                    <td class="border px-4 py-2 w-8">
                                        <img src="/storage/{{$gh->imagen}}" class="w-16 h-18 rounded-md shadow-md">
                                    </td>
                                    <td class="border px-4 py-2 w-8">{{$gh->descripcion}}</td>
                                    <td class="border px-4 py-2 w-8">
                                        <button
                                            type="button"
                                            wire:click="editarDos({{$gh->id}})"
                                            data-mdb-ripple="true"
                                            data-mdb-ripple-color="light"
                                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                                        >Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif 
                    </tbody>                    
                </table>
                <!-- Fin de la tabla -->
            </div>
        </div>
    </div>
</div>
