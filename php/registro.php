<?php
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["contraseña"];

    
    $host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $db = "musicvillage";

    $conexion = mysqli_connect($host, $dbusername, $dbpass, $db);


    $query= "INSERT INTO usuarios(username, email, password)
    VALUES('" . $username . "', '". $email ."','". $password . "')";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado){
        header('Location: /music-village/php/home.php');
    }    
?>