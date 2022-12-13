<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-300">
    <!-- Clases del modal -->
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <!-- Inicio del formulario -->
            <form> 
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <!-- Campo del código de nombre -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input autofocus type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                    </div>
                    <!-- Campo de la descripcion -->
                    <div class="mb-4">
                        <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion" cols="10" rows="5"></textarea>
                    </div>
                    <!-- Campo del precio -->
                    <div class="mb-4">
                        <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" id="precio" wire:model="precio">
                    </div>
                    <!-- Select de la categoria -- Envia como parametro el ID -->
                    <div class="mb-4">
                        <label for="categoria" class="block text-gray-700 text-sm font-bold mb-2">Categoria</label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" wire:model="id_categoria" id="id_categoria">
                            <option value="" disabled="">Seleccione un tipo</option>
                            @foreach ($categorias as $cat)
                                <option value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Campo de la imagen -- Muestra la imagen despues de cargarla -->
                    <div class="mb-4 w-48 h-38 bg-gray-200 rounded-md flex justify-center">
                        <div wire:loading wire:target="imagen" class="m-3"> 
                            <div class="flex justify-center spinner-border animate-spin w-16 h-16 m-8 border-4 rounded-full text-blue-500" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="flex justify-center pb-2 font-semibold text-blue-500 text-sm">Procesando, espere...</p>    
                        </div>
                        @if ($imagen)
                            <img class="w-48 h-38" src="{{$imagen->temporaryUrl()}}">
                        @endif
                    </div>
                    <!-- Campo de la imagen -->
                    <div class="mb-4">
                        <input type="file" wire:model="imagen">
                    </div>
                    <!-- Botones del formulario -->
                    <div class="bg-gray-50 flex justify-end py-2">
                        <!-- Boton para cerrar el formulario -->
                        <button
                        type="button"
                        wire:click.prevent="cerrarModal()"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block mr-2 px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Cerrar</button>
                        <!-- Boton -- Se muestra si la accion es registrar -->
                        @if ($accion == 'nuevo')
                            <button
                            type="button"
                            wire:click.prevent="guardar()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                            >Guardar</button>
                        <!-- Boton -- Se muestra si la accion es actualizar -->
                        @elseif($accion == 'actualizar')
                            <button
                            type="button"
                            wire:click.prevent="actualizar()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                            >Actualizar</button>
                        @endif       
                    </div>
                </div>
            </form>
            <!-- Fin del formulario -->
        </div>
    </div>
</div>