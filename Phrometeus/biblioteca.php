<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prometheus</title>
    <link rel="stylesheet" href="estilosbiblioteca.css">
    <link rel="shortcut icon" href="fenix.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <header class="biblioteca-header">
        <div class="barr-navegacion">
            <nav>
                <a href="index.php">Inicio</a>
                <a href="#1">Conocenos</a>
                <a href="biblioteca.php">Biblioteca</a>
                <!-- <a href="#">Archivos</a> -->
                <a class="login-boton" href="login.php">Login</a>
            </nav>
        </div>
    </header>
    <main>
   
        <div class="caja-descargas contenedor">
        <h2 style="text-align: center; padding:15px; margin: 20px auto;">Sección de Repaso</h2>
            <div class="contenedor-botones">
            

            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/1v_CKuUCfFkhs1D0Gr-QofXKm_Pk6oiac/view?usp=sharing')">
            <h3> ENURM 2023 </h3>
                
                <div class="icono">
                    <img src="examen.png" alt="">

                </div>
            </button>
            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/1gWHnvIGL_fDJ-fNabo1U6RIEgsmkh8UY/view?usp=drive_link')">
            <h3>ENURM 2022</h3>
            
                <div class="icono">
                    <img src="examen.png" alt="">

                </div>
            </button>
            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/1OnSjLu9WyPNOBuOCV1s2TSBCPRJC1qzW/view?usp=drive_link')">
            <h3>ENURM 2021</h3>
        
                <div class="icono">
                    <img src="examen.png" alt="">
                    
                </div>
            </button>
            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/11LMtRaeXQ-3TdBfb8XwCPJ8vRPOJK4Ms/view?usp=drive_link')">
            <h3>ENURM 2020</h3>

                <div class="icono">
                    <img src="examen.png" alt="">

                </div>
            </button>
            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/1zvI2FPiECjyx5tuVRwE15mpLu47-CMOU/view?usp=drive_link')">
            <h3>ENURM 2019</h3>

                <div class="icono">
                    <img src="examen.png" alt="">

                </div>
            </button>
            <button class="botones-descarga" onclick="descargarPDF('https://drive.google.com/file/d/1zvI2FPiECjyx5tuVRwE15mpLu47-CMOU/view?usp=drive_link')">
            <h3>ENURM 2018</h3>

                <div class="icono">
                    <img src="examen.png" alt="">

                </div>
            </button>

            <script>
                function descargarPDF(url) {
                    var link = document.createElement('a');
                    link.href = url;
                    // link.download = nombreArchivo;

                    
                    link.click();
                }
            </script>
            </div>
        </div>


    </main>



    <script src="app.js"></script>
    <footer class="footer" id="1">
        <div class="contactanos"><p style="color: #f1faff; text-align:center; padding:75px auto; margin:50px auto;">La Biblioteca Exemplar es un pilar de conocimiento y apoyo para todos los estudiantes que se preparan para el Examen Nacional Unificado de Educación Superior (ENURM). Desde nuestra fundación en el año 2000, nos hemos dedicado a brindar recursos y servicios especializados para ayudar a los aspirantes a alcanzar sus metas académicas.</p></div>
        <div class="contactanos"></div>
        <div class="contactanos"></div>
    </footer>
</body>

</html>