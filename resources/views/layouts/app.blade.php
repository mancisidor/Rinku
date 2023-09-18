<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Rinku</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo CSS y scripts JavaScript -->
</head>
<body>
    <!-- Encabezado de tu aplicación, como un menú de navegación -->
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/empleados">Empleados</a></li>
                <!-- Agrega más elementos de menú según tus necesidades -->
            </ul>
        </nav>
    </header>

    <!-- Contenido principal que se mostrará en cada página -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página de tu aplicación -->
    <footer>
        <!-- Agrega aquí información de pie de página si es necesario -->
    </footer>
</body>
</html>