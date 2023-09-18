<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Rinku</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo CSS y scripts JavaScript -->
    <!-- Estilos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts de JavaScript de Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Agrega las hojas de estilo CSS y el JavaScript de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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