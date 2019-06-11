<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/Home.css">
    <title>Music Village</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row nav">

                <!--logo-->
                <div class="col-3">
                    <a href="home.php">
                        <img src="../img/logo.png" width="50" height="50" alt="logo"></a>
                </div>

                <!--buscador-->
                <div class="col-4 offset-1">
                    <form class="form-inline align-items-start">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Go</button>
                    </form>
                </div>

                <!--iconos-->
                <div class="col-1 offset-3">

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                           
                            <div class="perfil">
                                <li class="nav-item">
                                    <a class="nav-link" href="perfil.php">
                                        <img src="../img/155.png" class="iconoperfil">
                                    </a>
                                </li>
                            </div>

                            <div class="amigos">
                                <li class="nav-item">
                                    <a class="nav-link" href="friends.php">
                                        <i class="fas fa-user-friends"></i>
                                    </a>
                                </li>
                            </div>
                            <div class="notif">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bell"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#"><img src="../img/001.png" width="30"
                                                height="30">
                                            Username2 comentó tu post</a>
                                        <a class="dropdown-item" href="#"><img src="../img/Pikachu.png" width="30"
                                                height="30">
                                            Username3 comentó tu post</a>
                                        <a class="dropdown-item" href="#">notif generica</a>
                                        <a class="dropdown-item" href="#">notif generica</a>
                                        <a class="dropdown-item" href="#">notif generica</a>
                                    </div>
                                </li>
                            </div>

                            <div class="config">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                    </a>


                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="crear-comunidades.php">Administrar comunidades</a>
                                        <a class="dropdown-item" href="notificaciones.php">Configurar notificaciones</a>
                                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                                    </div>

                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </nav>
    <!--navbar-->
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
            </div>
            <div class="lateral col-2">
            </div>
            <br>
        </div>
    </div>

    <!--post/????/mensaje bienvenida-->
    <div class="container-fluid">
        <div class="row">
            <div class="contenido col-8">
                <div id="actividad">
                    <h3>Inicio</h3>
                    <div class="card text bg-primary mb-3">
                        <div class="card-body container-fluid">
                            <div class="row">
                                <div class="acciones col-1">
                                    <div class="positivo">
                                        <i class="fas fa-volume-up"></i>
                                    </div>
                                    <div class="negativo">
                                        <i class="fas fa-volume-mute"></i>
                                    </div>
                                    <div class="comentar">
                                        <i class="fas fa-drum"></i>
                                    </div>
                                    <div class="guardar">
                                        <i class="fas fa-bookmark"></i>
                                    </div>
                                    <div class="compartir">
                                        <i class="fas fa-broadcast-tower"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                <?php
                                if (isset($_SESSION["username"])) {
                                    ?>
                                    <h4 class="card-title" >Bienvenido  <?php echo $_SESSION["username"]?> </h4>
                                <?php
                                }
                                ?>
                                    <p class="card-text">Tutorial</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">Posteado por ADMIN hace 20 minutos</div>
                    </div>
                </div>
            </div>

            <!--barra lateral-->
            <div class="lateral col-3">
                <h3>Trending comunidades</h3>
                <ol>
                    <li><a href="comunidades.php">Amantes del Pop</a></li>
                    <li><a href="comunidades.php">Fans del rock en español</a></li>
                    <li><a href="comunidades.php">comu generica</a></li>
                    <li><a href="comunidades.php">comu generica</a></li>
                </ol>
                <h3>Ranking usuarios</h3>
                <ol>
                    <li> <img src="../img/001.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username2</a>
                    </li>
                    <li> <img src="../img/Pikachu.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username3</a>
                    </li>
                    <li> <img src="../img/Charmander.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username4</a></li>
                    <li> <img src="../img/155.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username5</a></li>
                </ol>
                <a href="friends.php">Ver lista de amigos</a></li>
            </div>
        </div>
    </div>
    <br>








    <!--footer-->
    <div class="footer">
        <p>Creado para ComIT (2019)</p>
    </div>
    <!--footer-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../js/Comunidades.js"></script>

</body>

</html>