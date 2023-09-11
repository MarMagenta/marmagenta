<?php

    include 'conexion-be.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contrasena'];

    $query = "INSERT INTO registro(nombre,email,contraseña)
    VALUES ('$nombre','$email','$contraseña')";

    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar){
        echo'
        <script>
        alert("Usuario Registrado");
        window.location="index.php";
        </script>';
    }else{
        echo'<script>
        alert("Usuario No registrado intentelo de nuevo");
        window.location="login.php";
        </script>
        ';
    }
    mysqli_close($conexion);

?>