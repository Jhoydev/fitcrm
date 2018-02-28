<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Prueba de envio de correo</title>
</head>
<body>
    <p>Esto es un correo de prueba...</p>
    <p>Estos son los datos del usuario que ha realizado la denuncia:</p>
    <ul>
        <li>Nombre: {{ $member->fullName() }}</li>
        <li>Teléfono: {{ $member->phone }}</li>
        <li>DNI: {{ $member->id }}</li>
    </ul>
    <p>Y esta es la posición reportada:</p>
    <ul>
        <li>
            <a href="{{ $member->facebook }}">
                Ver en Google Maps
            </a>
        </li>
    </ul>
</body>
</html>