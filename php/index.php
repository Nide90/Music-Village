<?php
 //   $mensaje= "hola";
   // $lenguaje="php";
    //echo $mensaje . " " . $lenguaje;
?>

<?php
 //   echo "hola " . $_REQUEST["username"]
?>


<?php
    session_start();

    

    $username = $_REQUEST["username"]; $contraseña = $_REQUEST["contraseña"]; $email = $_REQUEST["email"];
    if ($username == "username1" && $contraseña == "1234" && $email == "hola@hotmail.com") 
    {
        $_SESSION["username"] = "username1";
        // $_SESSION["username"] = $_REQUEST["username"]
        header('Location: /music-village/home.php');

    } else {
        header('Location: /music-village/signin.php');
    }
    
?>

