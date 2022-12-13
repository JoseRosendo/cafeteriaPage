<div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <!-- Cabecera de la página -->
                <div class="flex justify-between">
                    <!-- Botón para crear un nuevo registro -->
                    <div class="flex py-2 px-4">
                        <button
                        type="button"
                        wire:click="crear()"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Crear</button>
                    </div>
                </div>
                @if ($modal)
                    @include('livewire.forms.form-productos')
                @endif
                @if ($modalCategoria)
                    @include('livewire.forms.form-categorias')
                @endif
                <table class="table-fixed w-full text-center">
                    <tr class="bg-gray-900 text-white">
                        <th class="px-4 py-2 w-8 rounded-tl-md">ID</th>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2 flex items-center justify-between">
                            Categoria
                            <button
                            type="button"
                            wire:click="crearCategoria()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block ml-2 px-3.5 py-2.5 bg-green-600 text-white font-bold text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                            > + </button>
                        </th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2 rounded-tr-md">Acciones</th>
                    </tr>
                    <tbody>
                        @foreach( $productos as $producto)
                            <tr>
                                <td class="border px-4 py-2 w-8">{{$producto->id_producto}}</td>
                                <td class="border px-4 py-2 w-8">
                                    <img src="/storage/{{$producto->imagen}}" class="w-16 h-18 rounded-md shadow-md">
                                </td>
                                <td class="border px-4 py-2 w-8">{{$producto->nombre}}</td>
                                <td class="border px-4 py-2 w-8">{{$producto->descripcion}}</td>
                                <td class="border px-4 py-2 w-8">{{$producto->categoria->nombre}}</td>
                                <td class="border px-4 py-2 w-8">&dollar; {{$producto->precio}}</td>
                                <td class="border px-4 py-2 w-8">
                                    <button
                                        type="button"
                                        wire:click="editar({{$producto->id_producto}})"
                                        data-mdb-ripple="true"
                                        data-mdb-ripple-color="light"
                                        class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                                    >Editar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
                <!-- Fin de la tabla -->
            </div>
        </div>
    </div>
</div>
