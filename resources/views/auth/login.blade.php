<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Hotel Simple</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="min-h-screen bg-slate-200 grid grid-cols-1 lg:grid-cols-12">
        <!-- Panel izquierdo oscuro -->
        <aside class="lg:col-span-3 bg-cyan-950 text-white flex flex-col justify-between p-8 sm:p-12 lg:p-16">
            <div class="my-auto max-w-md">
                <div class="flex items-center gap-3 mb-3">
                    <i class="fa-solid fa-hotel text-2xl text-slate-200"></i>
                    <h1 class="text-2xl sm:text-3xl font-extrabold tracking-wide uppercase">
                        Hotel Simple
                    </h1>
                </div>

                <p class="text-sm sm:text-base text-slate-300 mb-6">
                    Gestión sencilla para hoteles
                </p>

                <p class="text-xs sm:text-sm text-slate-300/90 leading-relaxed flex flex-wrap items-center gap-x-2 gap-y-1">
                    <span class="inline-flex items-center gap-1">
                        <i class="fa-solid fa-door-open text-xs text-slate-400"></i>
                        <span>Habitaciones</span>
                    </span>
                    <span>·</span>
                    <span class="inline-flex items-center gap-1">
                        <i class="fa-solid fa-users text-xs text-slate-400"></i>
                        <span>Huéspedes</span>
                    </span>
                    <span>·</span>
                    <span class="inline-flex items-center gap-1">
                        <i class="fa-solid fa-bell-concierge text-xs text-slate-400"></i>
                        <span>Servicios</span>
                    </span>
                    <span>·</span>
                    <span class="inline-flex items-center gap-1">
                        <i class="fa-solid fa-money-bill-wave text-xs text-slate-400"></i>
                        <span>Pagos</span>
                    </span>
                    <span>·</span>
                    <span class="inline-flex items-center gap-1">
                        <i class="fa-solid fa-file-invoice text-xs text-slate-400"></i>
                        <span>Facturas</span>
                    </span>
                </p>
            </div>
        </aside>

        <!-- Panel derecho con tarjeta de login -->
        <main class="lg:col-span-7 bg-slate-200 flex items-center justify-center p-6 sm:p-10 lg:p-16">
            <div class="w-full max-w-xl bg-white border border-slate-200/90 rounded-2xl p-8 sm:p-10 shadow-2xs">
                <div class="mb-7">
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 flex items-center gap-2.5">
                        <i class="fa-solid fa-right-to-bracket text-xl text-slate-700"></i>
                        <span>Iniciar sesión</span>
                    </h2>
                    <p class="text-sm text-slate-500 mt-1.5">
                        Ingresa con la cuenta de tu hotel
                    </p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Usuario / Correo electrónico -->
                    <div>
                        <label for="email" class="block text-xs font-medium text-slate-500 mb-2">
                            Usuario / Correo electrónico
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                <i class="fa-solid fa-user text-sm"></i>
                            </span>
                            <input
                                id="email"
                                type="text"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Nombre de usuario o correo"
                                required
                                autofocus
                                class="w-full bg-white border border-slate-200 rounded-xl pl-10 pr-4 py-3 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#23323f] focus:ring-2 focus:ring-[#23323f]/10"
                            >
                        </div>
                        @error('email')
                            <p class="text-red-600 text-xs mt-1.5 flex items-center gap-1">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="block text-xs font-medium text-slate-500 mb-2">
                            Contraseña
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 pointer-events-none">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </span>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="••••••••••"
                                required
                                class="w-full bg-white border border-slate-200 rounded-xl pl-10 pr-4 py-3 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#23323f] focus:ring-2 focus:ring-[#23323f]/10"
                            >
                        </div>
                        @error('password')
                            <p class="text-red-600 text-xs mt-1.5 flex items-center gap-1">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <span>{{ $message }}</span>
                            </p>
                        @enderror
                    </div>

                    <!-- Botón Ingresar -->
                    <div class="pt-2">
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 bg-[#23323f] hover:bg-[#19242e] text-white font-semibold text-sm py-3.5 px-5 rounded-xl transition-colors cursor-pointer"
                        >
                            <i class="fa-solid fa-arrow-right-to-bracket text-xs"></i>
                            <span>Ingresar</span>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>
</html>