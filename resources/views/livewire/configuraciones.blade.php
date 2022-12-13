<div class="flex justify-center">
    <!--Área de la descripcion-->
    <div class="bg-white rounded-md my-4 mx-4 w-2/3">
        <div class="flex justify-between">
            <div class="my-4 mx-4">
                @if ($textA == false)
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700"
                    >Descripción</label
                    >
                    <textarea
                    class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-500
                        bg-gray-200 bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        resize-none
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="6"
                    placeholder="Your message"
                    wire:model="descripcion"
                    disabled
                    ></textarea>
                </div>
                @else
                <div class="mb-3 xl:w-96">
                    <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700"
                    >Descripción</label
                    >
                    <textarea
                    class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="6"
                    placeholder="Your message"
                    wire:model="descripcionNew"
                    ></textarea>
                </div>
                @endif
                <button
                type="button"
                wire:click="changeDes()"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                >Editar</button>
            </div>
            <div class="my-4 mx-4">
                @if (!$logo)
                    <img src="/storage/{{$logo_antiguo}}" class="w-38 h-28 mb-2 rounded-md shadow-md">
                @endif
                <!--Logo-->
                <div class="mb-4 w-48 h-38 bg-gray-200 rounded-md flex justify-center">
                    <div wire:loading wire:target="logo" class="m-3"> 
                        <div class="flex justify-center spinner-border animate-spin w-16 h-16 m-8 border-4 rounded-full text-blue-500" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="flex justify-center pb-2 font-semibold text-blue-500 text-sm">Procesando, espere...</p>    
                    </div>
                    @if ($logo)
                        <img class="w-48 h-38 rounded-md" src="{{$logo->temporaryUrl()}}">
                    @endif
                </div>
                <div class="flex">
                    <div class="mb-3 w-96">
                      <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Selecciona el logo</label>
                      <input wire:model="logo"
                      class="form-control
                      block
                      w-full
                      px-2
                      py-1
                      text-sm
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="formFileSm" type="file">
                    </div>
                </div>
                <!--Icono-->
                @if (!$icono)
                <img class="w-38 h-28 mb-2 rounded-md shadow-md" src="/storage/{{$icono_antiguo}}">
                @endif
                <div class="mb-4 w-48 h-38 bg-gray-200 rounded-md flex justify-center">
                    <div wire:loading wire:target="icono" class="m-3"> 
                        <div class="flex justify-center m-8 spinner-border animate-spin w-16 h-16 border-4 rounded-full text-blue-500" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="flex justify-center pb-2 font-semibold text-blue-500 text-sm">Procesando, espere...</p>    
                    </div>
                    @if ($icono)
                        <img class="w-48 h-38 rounded-md" src="{{$icono->temporaryUrl()}}">
                    @endif
                </div>
                <div class="flex">
                    <div class="mb-3 w-96">
                      <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Seleccione el icono</label>
                      <input wire:model="icono" 
                      class="form-control
                      block
                      w-full
                      px-2
                      py-1
                      text-sm
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="formFileSm" type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end m-4">
            <button
            type="button"
            wire:click.prevent="actualizarInfo()"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
            class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
            >Actualizar</button>
        </div>
    </div>    
</div>
