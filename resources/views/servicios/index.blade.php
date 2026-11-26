@extends('layouts.main')
@section('contenido')
    <div class="min-h-screen p-4 mx-auto">
        <!-- Encabezado con botón -->
        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-slate-900 flex items-center gap-3">
                    <i class="fa-solid fa-bell-concierge text-slate-700 text-2xl"></i>
                    <span>Administrar servicios</span>
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    El administrador agrega los servicios que ofrece el hotel y establece sus precios.
                </p>
            </div>

            <button type="button" class="inline-flex items-center justify-center gap-2 bg-[#23323f] hover:bg-[#19242e] text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors shrink-0 cursor-pointer">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>Agregar servicio</span>
            </button>
        </div>

        <!-- Instrucciones -->
        <div class="mb-5 text-sm text-slate-500 space-y-0.5">
            <p class="font-medium text-slate-600">Listado de servicios y precios. Los formularios se abren solo al pulsar un botón.</p>
            <p>Usa «+ Agregar» para crear un registro. Pulsa «Editar» en la fila correspondiente para modificarlo.</p>
        </div>

        <!-- Tabla de servicios -->
        <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-[#e8edf5] text-slate-700 font-semibold border-b border-slate-200">
                            <th class="py-3.5 px-5 w-20">N°</th>
                            <th class="py-3.5 px-5">Servicio</th>
                            <th class="py-3.5 px-5">Precio</th>
                            <th class="py-3.5 px-5">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 text-slate-600">1</td>
                            <td class="py-4 px-5 font-medium text-slate-800">
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-solid fa-mug-saucer text-amber-600 text-xs"></i>
                                    <span>Desayuno</span>
                                </span>
                            </td>
                            <td class="py-4 px-5">S/ 18.00</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    <span>Editar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 text-slate-600">2</td>
                            <td class="py-4 px-5 font-medium text-slate-800">
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-solid fa-shirt text-sky-600 text-xs"></i>
                                    <span>Lavandería</span>
                                </span>
                            </td>
                            <td class="py-4 px-5">S/ 25.00</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    <span>Editar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 text-slate-600">3</td>
                            <td class="py-4 px-5 font-medium text-slate-800">
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-solid fa-car text-indigo-600 text-xs"></i>
                                    <span>Traslado al aeropuerto</span>
                                </span>
                            </td>
                            <td class="py-4 px-5">S/ 60.00</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    <span>Editar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 text-slate-600">4</td>
                            <td class="py-4 px-5 font-medium text-slate-800">
                                <span class="inline-flex items-center gap-2">
                                    <i class="fa-solid fa-square-parking text-emerald-600 text-xs"></i>
                                    <span>Estacionamiento por día</span>
                                </span>
                            </td>
                            <td class="py-4 px-5">S/ 15.00</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                    <i class="fa-solid fa-pen-to-square text-xs"></i>
                                    <span>Editar</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection