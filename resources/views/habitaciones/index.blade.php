@extends('layouts.main')
@section('contenido')
    <div class="min-h-screen p-4 mx-auto">
        <!-- Encabezado -->
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl font-bold text-slate-900 flex items-center gap-3">
                <i class="fa-solid fa-door-open text-slate-700 text-2xl"></i>
                <span>Habitaciones</span>
            </h1>
            <p class="text-sm text-slate-500 mt-1">
                Registra ingresos desde las disponibles y gestiona servicios desde las ocupadas.
            </p>
        </div>

        <!-- Banner de Habitaciones Disponibles -->
        <div class="bg-white border-2 border-emerald-600/80 rounded-xl p-5 md:px-6 mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 shadow-2xs">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
                <div>
                    <div class="text-[11px] font-bold tracking-wider uppercase text-slate-400 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i>
                        <span>Habitaciones disponibles</span>
                    </div>
                    <div class="flex items-baseline gap-3 mt-1">
                        <span class="text-3xl font-extrabold text-emerald-600 leading-none">12</span>
                        <span class="text-sm text-slate-600">
                            Pulsa para registrar un huésped en una habitación libre
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#1e885a] hover:bg-[#176e48] text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors shrink-0">
                <i class="fa-solid fa-user-plus text-xs"></i>
                <span>Registrar huésped</span>
            </a>
        </div>

        <!-- Habitaciones ocupadas -->
        <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
            <i class="fa-solid fa-bed text-slate-600 text-base"></i>
            <span>Habitaciones ocupadas</span>
        </h2>

        <!-- Buscador -->
        <div class="mb-5">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </span>
                <input
                    type="text"
                    placeholder="Buscar por número de habitación o huésped..."
                    class="w-full bg-white border border-slate-200 rounded-xl pl-11 pr-4 py-3 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-600/15"
                >
            </div>
        </div>

        <!-- Tabla de ocupadas -->
        <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-[#e8edf5] text-slate-700 font-semibold border-b border-slate-200">
                            <th class="py-3.5 px-5">Habitación</th>
                            <th class="py-3.5 px-5">Huésped</th>
                            <th class="py-3.5 px-5">Tipo</th>
                            <th class="py-3.5 px-5">Saldo pendiente</th>
                            <th class="py-3.5 px-5 text-right sm:text-left">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 font-medium text-slate-900">102</td>
                            <td class="py-4 px-5">Juan Pérez</td>
                            <td class="py-4 px-5">Doble</td>
                            <td class="py-4 px-5 font-medium text-slate-800">S/ 73</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-2 bg-[#3267b8] hover:bg-[#275396] text-white font-semibold text-xs sm:text-sm px-4 py-2 rounded-lg transition-colors">
                                    <i class="fa-solid fa-concierge-bell text-xs"></i>
                                    <span>Servicios / cobrar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 font-medium text-slate-900">105</td>
                            <td class="py-4 px-5">María López</td>
                            <td class="py-4 px-5">Doble</td>
                            <td class="py-4 px-5 font-medium text-emerald-700">S/ 0</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-2 bg-[#3267b8] hover:bg-[#275396] text-white font-semibold text-xs sm:text-sm px-4 py-2 rounded-lg transition-colors">
                                    <i class="fa-solid fa-concierge-bell text-xs"></i>
                                    <span>Servicios / cobrar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 font-medium text-slate-900">108</td>
                            <td class="py-4 px-5">Carlos Ruiz</td>
                            <td class="py-4 px-5">Simple</td>
                            <td class="py-4 px-5 font-medium text-slate-800">S/ 45</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-2 bg-[#3267b8] hover:bg-[#275396] text-white font-semibold text-xs sm:text-sm px-4 py-2 rounded-lg transition-colors">
                                    <i class="fa-solid fa-concierge-bell text-xs"></i>
                                    <span>Servicios / cobrar</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/70">
                            <td class="py-4 px-5 font-medium text-slate-900">110</td>
                            <td class="py-4 px-5">Ana Torres</td>
                            <td class="py-4 px-5">Suite</td>
                            <td class="py-4 px-5 font-medium text-slate-800">S/ 120</td>
                            <td class="py-4 px-5">
                                <a href="#" class="inline-flex items-center gap-2 bg-[#3267b8] hover:bg-[#275396] text-white font-semibold text-xs sm:text-sm px-4 py-2 rounded-lg transition-colors">
                                    <i class="fa-solid fa-concierge-bell text-xs"></i>
                                    <span>Servicios / cobrar</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection