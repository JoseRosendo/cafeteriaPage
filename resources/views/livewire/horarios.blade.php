<div>
    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
        <div class="flex flex-col justify-center h-full">
            <!-- Table -->
            <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100 flex justify-between">
                    <h2 class="font-semibold text-gray-800">Horarios</h2>
                    <button wire:click="abrirModal()" class="font-semibold text-white bg-green-600 mx-3 p-1 rounded-md">Agregar</button>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Día</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Horario apertura</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Horario descanso</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Horario reapertura</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Horario cierre</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Opciones</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($horarios as $horario)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-800">{{$horario->dia}}</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{$horario->hora_apertura}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{$horario->hora_descanso}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{$horario->hora_reapertura}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{$horario->hora_cierre}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <button wire:click="editar()" type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Editar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($modal)
        @include('livewire.horarios.form')
    @endif
</div>
