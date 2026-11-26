@extends('layouts.main')
@section('contenido')
    <div class="min-h-screen p-4 mx-auto">
        <!-- Título -->
        <h1 class="text-2xl md:text-3xl font-bold text-slate-900 flex items-center gap-3">
            <i class="fa-solid fa-file-invoice-dollar text-slate-700 text-2xl"></i>
            <span>Cuenta de habitación 102</span>
        </h1>

        <!-- Ficha del huésped y habitación -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
            <div class="text-base font-bold text-slate-900 flex flex-wrap items-center gap-2">
                <span>Habitación 102</span>
                <span class="text-slate-400">·</span>
                <span>Doble</span>
                <span class="text-slate-400">·</span>
                <span class="inline-flex items-center gap-1.5 text-amber-700">
                    <i class="fa-solid fa-circle text-[8px] text-amber-500"></i>
                    <span>Ocupada</span>
                </span>
            </div>
            <div class="text-xs sm:text-sm text-slate-500 mt-1.5 flex flex-wrap items-center gap-x-3 gap-y-1">
                <span><i class="fa-solid fa-user mr-1 text-slate-400"></i>Huésped: Juan Pérez</span>
                <span>|</span>
                <span><i class="fa-solid fa-id-card mr-1 text-slate-400"></i>DNI/RUC: 45678912</span>
                <span>|</span>
                <span><i class="fa-solid fa-phone mr-1 text-slate-400"></i>Teléfono: 999 222 333</span>
            </div>
        </div>

        <!-- Resumen financiero (3 tarjetas) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Total consumos</span>
                    <i class="fa-solid fa-receipt text-blue-600"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-[#2563eb] mt-2">
                    S/ 173
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Pagado</span>
                    <i class="fa-solid fa-circle-check text-emerald-600"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-[#1e885a] mt-2">
                    S/ 100
                </div>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Saldo pendiente</span>
                    <i class="fa-solid fa-clock text-amber-600"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-[#d97706] mt-2">
                    S/ 73
                </div>
            </div>
        </div>

        <!-- Movimientos de la habitación -->
        <div>
            <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                <i class="fa-solid fa-list-ul text-slate-600 text-base"></i>
                <span>Movimientos de la habitación</span>
            </h2>

            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="bg-[#e8edf5] text-slate-700 font-semibold border-b border-slate-200">
                                <th class="py-3.5 px-5">Fecha</th>
                                <th class="py-3.5 px-5">Concepto</th>
                                <th class="py-3.5 px-5">Cantidad</th>
                                <th class="py-3.5 px-5">Importe</th>
                                <th class="py-3.5 px-5">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            <tr class="hover:bg-slate-50/70">
                                <td class="py-3.5 px-5 text-slate-500">02/11</td>
                                <td class="py-3.5 px-5">Noche de habitación</td>
                                <td class="py-3.5 px-5">1</td>
                                <td class="py-3.5 px-5 font-medium text-slate-800">S/ 130</td>
                                <td class="py-3.5 px-5">
                                    <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Ver</span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/70">
                                <td class="py-3.5 px-5 text-slate-500">02/11</td>
                                <td class="py-3.5 px-5">Desayuno</td>
                                <td class="py-3.5 px-5">1</td>
                                <td class="py-3.5 px-5 font-medium text-slate-800">S/ 18</td>
                                <td class="py-3.5 px-5">
                                    <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Ver</span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/70">
                                <td class="py-3.5 px-5 text-slate-500">02/11</td>
                                <td class="py-3.5 px-5">Lavandería</td>
                                <td class="py-3.5 px-5">1</td>
                                <td class="py-3.5 px-5 font-medium text-slate-800">S/ 25</td>
                                <td class="py-3.5 px-5">
                                    <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Ver</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Agregar servicio a esta habitación -->
        <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-2xs">
            <h2 class="text-base font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-cart-plus text-blue-600"></i>
                <span>Agregar servicio a esta habitación</span>
            </h2>

            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
                @csrf
                <div class="md:col-span-3">
                    <label class="block text-xs font-medium text-slate-500 mb-2">
                        Habitación destino
                    </label>
                    <div class="bg-[#e8edf5] border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm font-bold text-slate-900">
                        <i class="fa-solid fa-door-closed text-slate-500 mr-1.5"></i>
                        <span>102 · Juan Pérez</span>
                    </div>
                </div>

                <div class="md:col-span-5">
                    <label for="servicio_id" class="block text-xs font-medium text-slate-500 mb-2">
                        Busca y selecciona un servicio del catálogo
                    </label>
                    <select
                        id="servicio_id"
                        name="servicio_id"
                        class="w-full bg-white border-2 border-[#2563eb] rounded-lg px-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-blue-600/20"
                    >
                        <option value="" selected disabled>Escribe para buscar o selecciona un servicio</option>
                        <option value="1">Desayuno — S/ 18.00</option>
                        <option value="2">Lavandería — S/ 25.00</option>
                        <option value="3">Traslado al aeropuerto — S/ 60.00</option>
                        <option value="4">Estacionamiento por día — S/ 15.00</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="cantidad" class="block text-xs font-medium text-slate-500 mb-2">
                        Cantidad
                    </label>
                    <input
                        type="number"
                        min="1"
                        value="1"
                        id="cantidad"
                        name="cantidad"
                        class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-center text-slate-800 focus:outline-none focus:border-blue-600"
                    >
                </div>

                <div class="md:col-span-2">
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-[#3267b8] hover:bg-[#275396] text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition-colors cursor-pointer">
                        <i class="fa-solid fa-plus text-xs"></i>
                        <span>Añadir a la cuenta</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection