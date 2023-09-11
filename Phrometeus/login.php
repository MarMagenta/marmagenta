<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="fenix.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Prometheus</title>
</head>
<body>

    <section class="modal">
        <div class="modal-container">
            <figure class="modal-picture">
                <img src="portada.jpg" class="modal-img">
            </figure>
            <h2 class="modal-titulo">¡Bienvenido de nuevo!
            </h2>

            <form action="login-usuario-be.php"  method="post">
                <input type="text" name="nombre" placeholder="Nombre Completo">
                <input type="password" name="contrasena" placeholder="Contraseña"> 
                <input type="submit" name="registrate"  value="Ingresa">
            </form>

        </div>
    </section>

</body>
</html>