<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
    <div class="login">
        <h1 class="loginTitulo">Ingrese sus datos</h1>
        <form method="post">
            <div class="datoslog">
            <div class="username">
                <input class="inputNombre" type="text" required placeholder="Ingrese su nombre">
                
            </div>
            <div class="correo">
                <input class="inputCorreo" type="text" required placeholder="Ingrese su correo">
                
            </div>
            <div class="texcom">Para comenzar presione iniciar</div>
                <div class="botonLogin">
                    <input type="submit" value="Iniciar" class="botonIniciar">
                </div>
                    <a href="../noti.php" class="salida">Salir del chatbot</a>
            </div>
        </form>
    </div>
    </div>
    
</body>
</html>