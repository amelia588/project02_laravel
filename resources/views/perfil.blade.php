<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Usuario</title>
</head>
<body>
    <h1>Perfil de Usuario</h1>
    <p>Nombre: {{ $usuario->nombre }}</p>
    <p>Email: {{ $usuario->email }}</p>
    <a href="/usuario/actualizar">Actualizar Datos</a>
</body>
</html>
