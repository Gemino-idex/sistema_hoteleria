@extends('layouts.main')
@section('contenido')
    <div class="min-h-screen p-4 mx-auto">
        <!-- Encabezado -->
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl font-bold text-slate-900 flex items-center gap-3">
                <i class="fa-solid fa-user-plus text-slate-700 text-2xl"></i>
                <span>Registrar huésped</span>
            </h1>
            <p class="text-sm text-slate-500 mt-1">
                Selecciona una habitación disponible para iniciar la estadía.
            </p>
        </div>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- Selector de habitación disponible -->
            <div>
                <label for="habitacion_id" class="block text-sm font-semibold text-slate-800 mb-2">
                    <i class="fa-solid fa-door-closed text-slate-500 mr-1.5"></i>
                    Habitación disponible
                </label>
                <div class="relative">
                    <select
                        id="habitacion_id"
                        name="habitacion_id"
                        class="w-full appearance-none bg-white border-2 border-[#2563eb] rounded-xl px-4 py-3.5 pr-10 text-sm font-bold text-slate-900 focus:outline-none focus:ring-2 focus:ring-blue-600/20"
                    >
                        <option value="101" selected>101 · Simple · S/ 80 por noche</option>
                        <option value="104">104 · Doble · S/ 130 por noche</option>
                        <option value="106">106 · Suite · S/ 200 por noche</option>
                    </select>
                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-blue-700">
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </span>
                </div>
            </div>

            <!-- Tarjeta: Datos del huésped -->
            <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-2xs">
                <h2 class="text-base font-bold text-slate-900 mb-5 flex items-center gap-2">
                    <i class="fa-solid fa-address-card text-slate-600"></i>
                    <span>Datos del huésped</span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="nombre_completo" class="block text-xs font-medium text-slate-500 mb-2">
                            Nombre completo
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fa-solid fa-user text-xs"></i>
                            </span>
                            <input
                                type="text"
                                id="nombre_completo"
                                name="nombre_completo"
                                placeholder="Nombres y apellidos"
                                class="w-full bg-white border border-slate-200 rounded-lg pl-9 pr-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="documento" class="block text-xs font-medium text-slate-500 mb-2">
                            DNI o RUC
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fa-solid fa-id-card text-xs"></i>
                            </span>
                            <input
                                type="text"
                                id="documento"
                                name="documento"
                                placeholder="Número de documento"
                                class="w-full bg-white border border-slate-200 rounded-lg pl-9 pr-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="telefono" class="block text-xs font-medium text-slate-500 mb-2">
                            Número de teléfono
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fa-solid fa-phone text-xs"></i>
                            </span>
                            <input
                                type="text"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono de contacto"
                                class="w-full bg-white border border-slate-200 rounded-lg pl-9 pr-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="fecha_ingreso" class="block text-xs font-medium text-slate-500 mb-2">
                            Fecha de ingreso
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fa-solid fa-calendar-day text-xs"></i>
                            </span>
                            <input
                                type="date"
                                id="fecha_ingreso"
                                name="fecha_ingreso"
                                value="2026-11-02"
                                class="w-full bg-white border border-slate-200 rounded-lg pl-9 pr-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:border-blue-600"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta: Pago inicial (opcional) -->
            <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-2xs">
                <h2 class="text-base font-bold text-slate-900 mb-5 flex items-center gap-2">
                    <i class="fa-solid fa-money-bill-wave text-emerald-600"></i>
                    <span>Pago inicial (opcional)</span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-end">
                    <div>
                        <label for="monto_recibido" class="block text-xs font-medium text-slate-500 mb-2">
                            Monto recibido
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            id="monto_recibido"
                            name="monto_recibido"
                            placeholder="S/ 0.00"
                            class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600"
                        >
                    </div>

                    <div>
                        <label for="medio_pago" class="block text-xs font-medium text-slate-500 mb-2">
                            Medio de pago
                        </label>
                        <select
                            id="medio_pago"
                            name="medio_pago"
                            class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-700 focus:outline-none focus:border-blue-600"
                        >
                            <option value="Efectivo" selected>Efectivo</option>
                            <option value="Yape / Plin">Yape / Plin</option>
                            <option value="Tarjeta">Tarjeta</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                    </div>

                    <div class="text-xs text-slate-500 pb-2.5 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-info text-slate-400"></i>
                        <span>El pago se registra en la cuenta de la habitación.</span>
                    </div>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="flex flex-wrap items-center justify-end gap-3 pt-1">
                <button type="submit" class="inline-flex items-center gap-2 bg-[#1e885a] hover:bg-[#176e48] text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors cursor-pointer">
                    <i class="fa-solid fa-check text-xs"></i>
                    <span>Registrar ingreso</span>
                </button>
                <a href="#" class="inline-flex items-center gap-2 bg-[#374754] hover:bg-[#293640] text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors">
                    <i class="fa-solid fa-xmark text-xs"></i>
                    <span>Cancelar</span>
                </a>
            </div>
        </form>
    </div>
@endsection