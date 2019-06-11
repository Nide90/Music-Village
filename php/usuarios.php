<?php    
    $host = "localhost";
    $dbusername = "root";
    $dbpass = "";
    $db = "musicvillage";

    $conexion = mysqli_connect($host, $dbusername, $dbpass, $db);
    

    $query = "SELECT * FROM usuarios";

    $resultado = mysqli_query($conexion, $query);
        ?>
        <select>
        <?php  
    while($fila = mysqli_fetch_assoc($resultado)){
        ?>
        <option>
            <?php echo $fila ["email"] . "<br>";?>
        </option>
    <?php
    }
    ?> 
    </select>
    