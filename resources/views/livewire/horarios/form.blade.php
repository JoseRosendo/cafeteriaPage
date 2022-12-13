<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>     
    <div class="fixed inset-0 z-10 overflow-y-auto">
        
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-bold capitalize text-gray-900" id="modal-title">Agregando horario</h3>
                            <div class="mt-2">
                                <form action="">
                                    <div class="mb-3 py-4">
                                        <span class="font-semibold">Día</span>
                                        <select wire:model="dia" id="dia" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                            <option value="" selected="true">Selecciona el día</option>
                                            <option value="lunes">Lunes</option>
                                            <option value="martes">Martes</option>
                                            <option value="miercoles">Miércoles</option>
                                            <option value="jueves">Jueves</option>
                                            <option value="viernes">Viernes</option>
                                            <option value="sabado">Sábado</option>
                                            <option value="domingo">Domingo</option>
                                        </select>
                                    </div>
                                    <div class="flex">
                                        <div class="w-1/2">
                                            <span class="font-semibold">Hora de apertura</span>
                                            <div class="flex justify-center">
                                                <div class="timepicker relative form-floating mb-3 xl:w-70">
                                                  <input wire:model="hora_apertura" id="hora_apertura" type="text"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    placeholder="Select a date" />
                                                  <label for="floatingInput" class="text-gray-700">Seleccione la hora</label>
                                                  {{-- <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                                                    <span class="fas fa-clock timepicker-icon">o</span>
                                                  </button> --}}
                                                </div>
                                              </div>
                                        </div>
                                        <div class="w-1/2">
                                            <span class="font-semibold">Hora de descanso</span>
                                            <div class="flex justify-center">
                                                <div class="timepicker relative form-floating mb-3 xl:w-96">
                                                  <input wire:model="hora_descanso"  id="hora_descanso" type="text"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    placeholder="Select a date" />
                                                  <label for="floatingInput" class="text-gray-700">Seleccione la hora</label>
                                                  {{-- <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                                                    <span class="fas fa-clock timepicker-icon">o</span>
                                                  </button> --}}
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-1/2">
                                            <span class="font-semibold">Hora de reapertura</span>
                                            <div class="flex justify-center">
                                                <div class="timepicker relative form-floating mb-3 xl:w-70">
                                                  <input wire:model="hora_reapertura" id="hora_reapertura" type="text"
                                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    placeholder="Select a date" />
                                                  <label for="floatingInput" class="text-gray-700">Seleccione la hora</label>
                                                  {{-- <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                                                    <span class="fas fa-clock timepicker-icon">o</span>
                                                  </button> --}}
                                                </div>
                                              </div>
                                        </div>
                                        <div class="w-1/2">
                                            <span class="font-semibold">Hora de cierre</span>
                                            <div class="flex justify-center">
                                              <div class="timepicker relative form-floating mb-3 xl:w-96">
                                                <input type="text"
                                                  wire:model="hora_cierre" id="hora_cierre"
                                                  class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                  placeholder="Select a date" />
                                                <label for="floatingInput" class="text-gray-700">Seleccione la hora</label>
                                                {{-- <button tabindex="0" type="button" class="timepicker-toggle-button" data-mdb-toggle="timepicker">
                                                  <span class="fas fa-clock timepicker-icon">o</span>
                                                </button> --}}
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button wire:click="guardar()" type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Guardar</button>
                    <button wire:click="cerrarModal()" type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>