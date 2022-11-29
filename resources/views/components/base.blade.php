<html>
    <head>
        <title>{{ $titulo ?? 'Agenda' }}</title>
        <link rel="stylesheet" href="/css/estilos.css" />
    </head>
    <body>
        <x-menu />
        <h1>{{ $titulo ?? 'Agenda' }}</h1>
        <hr/>

        {{ $slot }}


        <x-pie/>
    </body>
</html>
