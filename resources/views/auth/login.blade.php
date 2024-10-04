<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/login/assets/css/style.css') }}">
    <title>Iniciar Sesion | TesLtda</title>
</head>
<body>
    
    <div class="login-card">
        <h2>Iniciar Sesion</h2>
        <h3>Ingresa tus credenciales</h3>

        <form class="login-form">
            <input type="text" placeholder="Nombre de usuario">
            <input type="password" placeholder="Contraseña">
            <a href="#">Olvidaste tu contraseña?</a>
            <button type="submit">INICIAR SESION</button>
        </form>
    </div>
</body>
</html>