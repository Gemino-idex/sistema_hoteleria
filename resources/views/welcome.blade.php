<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Hoteleria</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    <div> <!-- contenedor principal -->

        <div class="flex "> <!-- contenedor menú -->
            <a href="">
                <img src="{{ asset('imagenes/portada.jpg') }}" alt="Logo del sistema de hoteleria" width="200" height="300">
            </a>
            <a href="">Inicio</a>
            <a href="">Habitaciones</a>
            <a href="">Servicios</a>
            <a href="">Huespedes</a>
            <a href="">Pagos y Facturas</a>
            <button>Cerrar sesión</button>
        </div> <!-- fin contenedor menú -->

        <div> <!-- contenedor contenido -->
            <h2>Bienvenido al sistema de hoteleria</h2>

        </div> <!-- fin contenedor contenido -->

    </div> <!-- fin contenedor principal -->
</body>

</html>