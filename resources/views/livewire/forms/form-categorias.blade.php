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
                    <!-- Campo del nombre -->
                    <div class="mb-4">
                        <label for="nombre_categoria" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                        <input autofocus type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" id="nombre_categoria" wire:model="nombre_categoria">
                    </div>
                    <!-- Campo de la descripcion -->
                    <div class="mb-4">
                        <label for="descripcion_categoria" class="block text-gray-700 text-sm font-bold mb-2">Descripcion</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 loading-tight focus:outline-none focus:shadow-outline" id="descripcion_categoria" wire:model="descripcion_categoria" cols="10" rows="5"></textarea>
                    </div>
                    <!-- Botones del formulario -->
                    <div class="bg-gray-50 flex justify-end py-2">
                        <!-- Boton para cerrar el formulario -->
                        <button
                        type="button"
                        wire:click.prevent="cerrarModalC()"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="inline-block mr-2 px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Cerrar</button>
                        <!-- Boton -- Se muestra si la accion es registrar -->
                        <button
                            type="button"
                            wire:click.prevent="guardarCategoria()"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Guardar</button>     
                    </div>
                </div>
            </form>
            <!-- Fin del formulario -->
        </div>
    </div>
</div>