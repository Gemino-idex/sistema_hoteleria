@extends('layouts.main')
@section('contenido')
    <div class="min-h-screen p-4 mx-auto">
        <!-- Encabezado -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-slate-900 flex items-center gap-3">
                    <i class="fa-solid fa-file-invoice text-slate-700 text-2xl"></i>
                    <span>Pagos y facturas</span>
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Registra cobros de habitaciones y emite boletas o facturas de hospedaje.
                </p>
            </div>
        </div>

        <!-- Tarjetas de resumen -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Cobrado hoy</span>
                    <i class="fa-solid fa-cash-register text-emerald-600"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-slate-900 my-2">
                    S/ 650
                </div>
                <div class="text-xs text-slate-500">6 operaciones registradas</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Por cobrar (pendiente)</span>
                    <i class="fa-solid fa-hourglass-half text-amber-500"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-[#d97706] my-2">
                    S/ 238
                </div>
                <div class="text-xs text-slate-500">3 cuentas abiertas</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Boletas emitidas</span>
                    <i class="fa-solid fa-receipt text-blue-600"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-slate-900 my-2">
                    14
                </div>
                <div class="text-xs text-slate-500">Este mes</div>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-2xs">
                <div class="flex items-center justify-between text-xs font-medium text-slate-500">
                    <span>Facturas emitidas</span>
                    <i class="fa-solid fa-file-contract text-slate-700"></i>
                </div>
                <div class="text-2xl md:text-3xl font-extrabold text-slate-900 my-2">
                    5
                </div>
                <div class="text-xs text-slate-500">Con RUC registrado</div>
            </div>
        </div>

        <!-- Registrar pago y emitir comprobante -->
        <div class="bg-white border border-slate-200 rounded-xl p-6 shadow-2xs">
            <h2 class="text-base font-bold text-slate-900 mb-4 flex items-center gap-2">
                <i class="fa-solid fa-money-check-dollar text-emerald-600"></i>
                <span>Registrar pago / emitir comprobante</span>
            </h2>

            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
                @csrf
                <div class="md:col-span-3">
                    <label for="cuenta_habitacion" class="block text-xs font-medium text-slate-500 mb-2">
                        Cuenta / Habitación
                    </label>
                    <select
                        id="cuenta_habitacion"
                        name="cuenta_habitacion"
                        class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-blue-600"
                    >
                        <option value="102" selected>102 · Juan Pérez (Saldo: S/ 73)</option>
                        <option value="108">108 · Carlos Ruiz (Saldo: S/ 45)</option>
                        <option value="110">110 · Ana Torres (Saldo: S/ 120)</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="tipo_comprobante" class="block text-xs font-medium text-slate-500 mb-2">
                        Comprobante
                    </label>
                    <select
                        id="tipo_comprobante"
                        name="tipo_comprobante"
                        class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-blue-600"
                    >
                        <option value="boleta" selected>Boleta</option>
                        <option value="factura">Factura</option>
                        <option value="recibo">Recibo interno</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="medio_pago_cobro" class="block text-xs font-medium text-slate-500 mb-2">
                        Medio de pago
                    </label>
                    <select
                        id="medio_pago_cobro"
                        name="medio_pago_cobro"
                        class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:border-blue-600"
                    >
                        <option value="Efectivo" selected>Efectivo</option>
                        <option value="Yape / Plin">Yape / Plin</option>
                        <option value="Tarjeta">Tarjeta</option>
                        <option value="Transferencia">Transferencia</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label for="monto_cobro" class="block text-xs font-medium text-slate-500 mb-2">
                        Monto (S/)
                    </label>
                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        value="73.00"
                        id="monto_cobro"
                        name="monto_cobro"
                        class="w-full bg-white border border-slate-200 rounded-lg px-3.5 py-2.5 text-sm font-semibold text-slate-900 focus:outline-none focus:border-blue-600"
                    >
                </div>

                <div class="md:col-span-3">
                    <button type="submit" class="w-full inline-flex items-center justify-center gap-2 bg-[#1e885a] hover:bg-[#176e48] text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition-colors cursor-pointer">
                        <i class="fa-solid fa-check-double text-xs"></i>
                        <span>Registrar y emitir</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Historial de pagos y comprobantes -->
        <div>
            <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-slate-600 text-base"></i>
                <span>Historial de pagos y comprobantes</span>
            </h2>

            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-2xs">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="bg-[#e8edf5] text-slate-700 font-semibold border-b border-slate-200">
                                <th class="py-3.5 px-5">Comprobante</th>
                                <th class="py-3.5 px-5">Habitación / Huésped</th>
                                <th class="py-3.5 px-5">Medio de pago</th>
                                <th class="py-3.5 px-5">Fecha</th>
                                <th class="py-3.5 px-5">Monto</th>
                                <th class="py-3.5 px-5">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            <tr class="hover:bg-slate-50/70">
                                <td class="py-4 px-5 font-semibold text-slate-900">
                                    <i class="fa-solid fa-file-invoice text-blue-600 mr-1.5"></i>
                                    <span>F001-00018</span>
                                </td>
                                <td class="py-4 px-5">102 · Juan Pérez</td>
                                <td class="py-4 px-5">Efectivo</td>
                                <td class="py-4 px-5 text-slate-500">02/11/2026</td>
                                <td class="py-4 px-5 font-semibold text-[#1e885a]">S/ 100.00</td>
                                <td class="py-4 px-5 flex items-center gap-4">
                                    <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Ver</span>
                                    </a>
                                    <a href="#" class="inline-flex items-center gap-1 text-slate-700 hover:text-slate-900 font-medium">
                                        <i class="fa-solid fa-print text-xs"></i>
                                        <span>Imprimir</span>
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50/70">
                                <td class="py-4 px-5 font-semibold text-slate-900">
                                    <i class="fa-solid fa-receipt text-emerald-600 mr-1.5"></i>
                                    <span>B001-00042</span>
                                </td>
                                <td class="py-4 px-5">105 · María López</td>
                                <td class="py-4 px-5">Yape / Plin</td>
                                <td class="py-4 px-5 text-slate-500">02/11/2026</td>
                                <td class="py-4 px-5 font-semibold text-[#1e885a]">S/ 130.00</td>
                                <td class="py-4 px-5 flex items-center gap-4">
                                    <a href="#" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                        <span>Ver</span>
                                    </a>
                                    <a href="#" class="inline-flex items-center gap-1 text-slate-700 hover:text-slate-900 font-medium">
                                        <i class="fa-solid fa-print text-xs"></i>
                                        <span>Imprimir</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection