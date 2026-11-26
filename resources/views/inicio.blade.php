@extends('layouts.main')
@section('contenido')
<div class="min-h-screen p-4 mx-auto">
    <!-- Título principal -->
    <h1 class="text-2xl md:text-3xl font-bold text-[#1e293b] mb-6 flex items-center gap-3">
        <i class="fa-solid fa-hotel text-slate-700 text-2xl"></i>
        <span>Inicio</span>
    </h1>

    <!-- Tarjetas de resumen (4 columnas) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">

        <!-- Tarjeta 1: Habitaciones -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs flex flex-col justify-between">
            <div class="flex items-center justify-between text-slate-500 text-sm font-medium">
                <span>Habitaciones</span>
                <i class="fa-solid fa-door-closed text-slate-400 text-base"></i>
            </div>
            <div class="text-3xl font-extrabold text-slate-900 my-2.5">
                20
            </div>
            <div class="text-xs text-slate-500">
                Total configuradas
            </div>
        </div>

        <!-- Tarjeta 2: Disponibles -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs flex flex-col justify-between">
            <div class="flex items-center justify-between text-slate-500 text-sm font-medium">
                <span>Disponibles</span>
                <i class="fa-solid fa-circle-check text-emerald-500 text-base"></i>
            </div>
            <div class="text-3xl font-extrabold text-slate-900 my-2.5">
                12
            </div>
            <div class="text-xs text-slate-500">
                Listas para ocupar
            </div>
        </div>

        <!-- Tarjeta 3: Ocupadas -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs flex flex-col justify-between">
            <div class="flex items-center justify-between text-slate-500 text-sm font-medium">
                <span>Ocupadas</span>
                <i class="fa-solid fa-bed text-amber-500 text-base"></i>
            </div>
            <div class="text-3xl font-extrabold text-slate-900 my-2.5">
                8
            </div>
            <div class="text-xs text-slate-500">
                Con huésped
            </div>
        </div>

        <!-- Tarjeta 4: Ingresos del mes -->
        <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs flex flex-col justify-between">
            <div class="flex items-center justify-between text-slate-500 text-sm font-medium">
                <span>Ingresos del mes</span>
                <i class="fa-solid fa-sack-dollar text-blue-600 text-base"></i>
            </div>
            <div class="text-3xl font-extrabold text-slate-900 my-2.5">
                S/ 4,850
            </div>
            <div class="text-xs text-slate-500">
                Pagos registrados
            </div>
        </div>

    </div>

    <!-- Contenedor principal: Actividad del hotel -->
    <div class="bg-white border border-slate-200 rounded-2xl p-6 md:p-8 shadow-2xs">
        <h2 class="text-lg font-bold text-slate-900 mb-5 flex items-center gap-2.5">
            <i class="fa-solid fa-bell-concierge text-slate-600"></i>
            <span>Actividad del hotel</span>
        </h2>

        <!-- Tabla responsiva -->
        <div class="overflow-x-auto border border-slate-200 rounded-xl">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-gray-200 text-slate-700 font-semibold border-b border-slate-200">
                        <th class="py-3.5 px-5">Habitación</th>
                        <th class="py-3.5 px-5">Tipo</th>
                        <th class="py-3.5 px-5">Estado</th>
                        <th class="py-3.5 px-5">Huésped</th>
                        <th class="py-3.5 px-5">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    <!-- Fila 1 -->
                    <tr class="hover:bg-slate-50/70 transition-colors">
                        <td class="py-4 px-5 font-medium text-slate-900">101</td>
                        <td class="py-4 px-5">Simple</td>
                        <td class="py-4 px-5">
                            <span class="inline-flex items-center gap-1.5 text-slate-700">
                                <i class="fa-solid fa-circle text-[8px] text-emerald-500"></i>
                                Disponible
                            </span>
                        </td>
                        <td class="py-4 px-5 text-slate-500">—</td>
                        <td class="py-4 px-5">
                            <a href="#" class="inline-flex items-center gap-1.5 text-slate-800 hover:text-blue-600 font-medium transition-colors">
                                <i class="fa-solid fa-right-to-bracket text-xs text-slate-500"></i>
                                <span>Registrar ingreso</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Fila 2 -->
                    <tr class="hover:bg-slate-50/70 transition-colors">
                        <td class="py-4 px-5 font-medium text-slate-900">102</td>
                        <td class="py-4 px-5">Doble</td>
                        <td class="py-4 px-5">
                            <span class="inline-flex items-center gap-1.5 text-slate-700">
                                <i class="fa-solid fa-circle text-[8px] text-amber-500"></i>
                                Ocupada
                            </span>
                        </td>
                        <td class="py-4 px-5 text-slate-500">
                            <span class="inline-flex items-center gap-1.5">
                                <i class="fa-solid fa-eye-slash text-xs text-slate-400"></i>
                                <span>Datos ocultos</span>
                            </span>
                        </td>
                        <td class="py-4 px-5">
                            <a href="#" class="inline-flex items-center gap-1.5 text-blue-600 hover:text-blue-800 font-medium transition-colors">
                                <i class="fa-solid fa-folder-open text-xs"></i>
                                <span>Abrir cuenta</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Fila 3 -->
                    <tr class="hover:bg-slate-50/70 transition-colors">
                        <td class="py-4 px-5 font-medium text-slate-900">103</td>
                        <td class="py-4 px-5">Suite</td>
                        <td class="py-4 px-5">
                            <span class="inline-flex items-center gap-1.5 text-slate-700">
                                <i class="fa-solid fa-circle text-[8px] text-emerald-500"></i>
                                Disponible
                            </span>
                        </td>
                        <td class="py-4 px-5 text-slate-500">—</td>
                        <td class="py-4 px-5">
                            <a href="#" class="inline-flex items-center gap-1.5 text-slate-800 hover:text-blue-600 font-medium transition-colors">
                                <i class="fa-solid fa-right-to-bracket text-xs text-slate-500"></i>
                                <span>Registrar ingreso</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection