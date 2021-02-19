<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: 'Segoe UI';
        }
    </style>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('principal') }}">Inicio</a></li>
                <li><a href="">Intranet</a></li>
                <li><a href="{{ route('acerca-de') }}">Acerca de</a></li>
                <li><a href="{{ route('contactanos') }}">Contactanos</a></li>
            </ul>
        </nav>
        @yield('cabecera')
    </header>
    <main>
        @yield('cuerpo')
    </main>
    <footer>
        <p>Todos los Derechos Reservados &COPY; 2021</p>
    </footer>
</body>
</html>