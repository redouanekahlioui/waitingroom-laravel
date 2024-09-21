<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Room</title>
</head>
<body>
    <h1>Estás en la Sala de Espera</h1>
    <p>Por favor, espera un momento hasta que sea tu turno.</p>
    <p>Tu posición en la cola: {{ session('queue_position', 'Cargando...') }}</p>
</body>
</html>