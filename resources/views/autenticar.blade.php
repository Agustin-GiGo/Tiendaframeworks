<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    @if (session('error'))
    <div>
        {{ session('error') }}
    </div>
    <br>
    @endif
    <form action="/validar" method="post">
        @csrf
        Usuario:   <input type="text" name="usuario"><br>
        Contraseña:<input type="password" name="password"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>