<?php

    include 'conexion-be.php';

    $NAME = $_POST['nombre'];
    $CONTRASENA = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM registro WHERE nombre ='$NAME' and contraseña ='$CONTRASENA' ");

    if(mysqli_num_rows($validar_login) >1 ){
        header("location:index.php");
    } else {
        echo '
        <script>
        alert("Usuario no registrado intentelo de nuevo");
        window.location="suscribete.php";
        </script>
        ';
    }



?>