
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prometheus</title>
    <link rel="stylesheet" href="estilosgeneral.css">
    <link rel="shortcut icon" href="fenix.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="barr-navegacion">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="#1">Conocenos</a>
            <a href="biblioteca.php">Biblioteca</a>
            <!-- <a href="#">Archivos</a> -->
            <a class="login-boton" href="login.php">Login</a>
        </nav>
    </div>
        <section class="textos-header">
            <h1>¿Estas listo para el ENURM?</h1>
            <h2>Lo estaras con nosotros</h2>
           
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-0.27,54.78 C149.99,150.00 349.20,-49.98 508.17,111.03 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill:#ffffff;"></path>
            </svg></div>
    </header>
    <main>

            <div class="caja-suscripcion">
                <h3 style="text-align: center; padding:15px">Registrate</h3>
                <form action="registro-usuario-be.php"  method="post">
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                    <input type="text" name="email" placeholder="Correo Electronico">
                    <input type="password" name="contrasena" placeholder="Contraseña"> 
                    <!-- <input type="date" name="fecha" placeholder="Fecha de Nacimiento"> -->
                    <input type="submit" name="registrate"  value="Registrate">
                </form>
            
            </div>
    </main>

            <script  src="app.js"></script>
            <footer class="footer" id="1">
        <div class="contactanos"><p style="color: #f1faff; text-align:center; padding:75px auto; margin:auto;">La Biblioteca Exemplar es un pilar de conocimiento y apoyo para todos los estudiantes que se preparan para el Examen Nacional Unificado de Educación Superior (ENURM). Desde nuestra fundación en el año 2000, nos hemos dedicado a brindar recursos y servicios especializados para ayudar a los aspirantes a alcanzar sus metas académicas.</p></div>
        <div class="contactanos"></div>
        <div class="contactanos"></div>
    </footer>
</body>

</html>