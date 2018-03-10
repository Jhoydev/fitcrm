<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Prueba de envio de correo</title>
</head>
<body>
    <P>E-mail: {{ $content["fromemail"] }}</P>
    <P>Mensaje: {{ $content["content"] }}</P>
</body>
</html>