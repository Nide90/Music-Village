<?php
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../estilos/friends.css">
    <title>Music Village: lista de amigos</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row nav">

                <!--logo-->
                <div class="col-3">
                    <a href="home.html">
                        <img src="../img/logo.png" width="50" height="50" alt="logo"></a>
                </div>

                <!--buscador-->
                <div class="col-4 offset-1">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                    </form>
                </div>

                <!--iconos-->
                <div class="col-1 offset-3">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <div class="amigos">
                                <li class="nav-item">
                                    <a class="nav-link" href="friends.html">
                                        <i class="fas fa-user-friends"></i>
                                    </a>
                                </li>
                            </div>

                            <div class="notif">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-bell"></i>
                                    </a>
                                </li>
                            </div>

                            <div class="config">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i>
                                    </a>


                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Administrar comunidades</a>
                                        <a class="dropdown-item" href="#">Configurar notificaciones</a>
                                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                                    </div>

                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <!--info usuario-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="perfil">
                    <img src="../img/155.png" alt="username1" style="width:128px;height:128px;">
                </div>
            </div>
            <div class="col-7">
                <div class="perfil">
                    <h1>Username1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis magni dolores facere consequatur doloribus sequi tempore quia in, quaerat quibusdam harum non sapiente repellendus provident sed, voluptate cupiditate quasi iure.
                    </p>
                </div>
            </div>
            <div class="3">
                <h3>Amigos recomendados</h3>
                <ul>
                    <li> <img src="../img/054.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username8</a>
                    </li>
                    <li> <img src="../img/054.png" width="40" height="40" alt="logo"> <a
                            href="username2.html">Username9</a>
                    </li>
            </div>
        </div>
    </div>

    <!--LISTA-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <h3>Lista de amigos</h3>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/Pikachu.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username2</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/001.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username3</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/Charmander.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username4</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/001.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username5</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/001.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username6</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="imagen col-1">
                            <img src="../img/001.png" width="50" height="50">
                        </div>
                        <div class="datosuser col-3">
                            <h5>username7</h5>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
            <div class="col-3">
                <!--barra lateral-->

                <h3>Encontra a tus amigos</h3>
                <div>
                    <form>
                        <input type="email" placeholder="  E-mail">
                        <button class="button"><span>Enviar</span></button>
                    </form>
                </div>
                <h3>Comunidades recomendadas</h3>
                <ul>
                    <li><a href="comunidades.html">Comunidad 1</a></li>
                    <li><a href="comunidades.html">Comunidad 2</a></li>
                    <li><a href="comunidades.html">Comunidad 3</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <p>Creado para ComIT (2019)</p>
    </div>
    <!--footer-->
</body>

</html>