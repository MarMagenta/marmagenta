<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prometheus</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="fenix.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="barr-navegacion">
            <nav>
                <a href="#">Inicio</a>
                <a href="#1">Conocenos</a>
                <a href="biblioteca.php">Biblioteca</a>
                <!-- <a href="#">Archivos</a> -->
                <a class="login-boton" href="login.php">Login</a>
            </nav>
        </div>
        <section class="textos-header">
            <h1 style="color: #fff;">¿Estas listo para el ENURM?</h1>
            <h2 style="color: #fff;">Conoce mas</h2>
            <button class="boton"><a style="text-decoration: none; color: black;" href="suscribete.php">Registrate</a></button>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-0.27,54.78 C149.99,150.00 349.20,-49.98 508.17,111.03 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#f1faff;"></path>
            </svg></div>
      
        </section>

    </header>
    <main>
        <div class="tamaño">
            <div class="container__card">

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(img1.jpg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h3>Conoce Todo lo relacionado al UNARM</h3>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h3>Examen Único de Residencias Médicas</h3>
                                <p> Es una evaluación que deben realizar los médicos que desean ingresar a un programa de especializaciónen el país.Su principal objetivo es seleccionar a los mejores candidatos para cubrir las vacantes disponibles en los diferentes programas de residencia a nivel nacional. </p>
                                <input type="button" value="Leer Más" onclick="window.location.href='https://www.fcsuasd.net/examen.php'" style="align-items: center;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(img21.jpg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h3>Los resultados generales del ENURM 2023</h3>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h3>Los resultados generales del ENURM 2023 fueron los siguientes:</h3>
                                <p>
                                    <li>Número de postulantes: 6,224</li>
                                    <li>Número de aprobados: 3,704</li>
                                    <li>Porcentaje de aprobación: 59.5%</li>


                                    <!-- <input type="button" value="Leer Más"> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(img31.jpg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h3>Mira las Estadisticas de aprobacion el examen por Universidades</h3>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h3>Las estadísticas de años anteriores (2022 y 2021) mostraron las siguientes tasas de aprobación</h3>
                                <p>
                                    <li>UASD: 65-70% de aprobacion</li>
                                    <li>UNIBE: 70-75% de aprobación</li>
                                    <li>UNPHU: 60-65% de aprobación</li>
                                    <li>UCNE: 55-60% de aprobación</li>
                                    <li>UCE: 50-55% de aprobación</li>
                                    <li>UNI: 45-50% de aprobación</li>
                                </p>
                                <!-- <input type="button" value="Leer Más"> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <script src="app.js"></script>

    <footer class="footer" id="1">
        <div class="contactanos">
        <p style="color: #f1faff; text-align:center; padding:75px auto; margin:auto;">La Biblioteca Exemplar es un pilar de conocimiento y apoyo para todos los estudiantes que se preparan para el Examen Nacional Unificado de Educación Superior (ENURM). Desde nuestra fundación en el año 2000, nos hemos dedicado a brindar recursos y servicios especializados para ayudar a los aspirantes a alcanzar sus metas académicas.</p>
        </div>
        
    </footer>
</body>

</html>