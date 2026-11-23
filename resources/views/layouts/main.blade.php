<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen flex"> <!-- Contenedor principal -->

        <aside class="top-0 left-0 h-screen flex flex-col w-50 bg-cyan-950"><!-- sidebar -->
            <div class="text-white flex p-3 items-center gap-2"><!-- logo -->
                <a href="">
                    <img src="{{ asset('imagenes/logo.png') }}" alt="Logo del sistema de hoteleria" width="150" height="300">
                </a>
            </div><!-- fin del logo -->

            <div class="pl-6 mt-4"><!-- menú del sidebar -->
                @include('layouts.partials.menu')
            </div><!-- fin del menú -->

            <!-- Cerrar sesión al fondo -->
            <div class="mt-auto mb-6 text-white flex justify-center hover:text-red-600">
                <button><i class="fa-solid fa-sign-out-alt"></i> Cerrar Sesión</button>
            </div>
        </aside><!-- fin del sidebar -->
        <div class="flex-1 bg-slate-100"><!-- contenido principal -->
            <div class="bg-cyan-900 p-4 text-white flex items-center px-4">

                <div class="text-lg ml-auto text-right px-6">
                    <i class="fas fa-user"></i> Admin
                </div>
            </div><!-- fin del encabezado del contenido principal -->
            <div class="p-5"><!-- contenido del contenido principal -->
                @yield('contenido')
            </div><!-- fin del contenido del contenido principal -->
        </div><!-- fin del contenido principal -->
    </div> <!-- fin del contenedor principal -->
</body>

</html>