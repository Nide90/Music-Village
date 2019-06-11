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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../estilos/Editar-Perfil.css">
    <title>RED SOCIAL: editar perfil</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row nav">

                <!--logo-->
                <div class="col-3">
                    <a href="home.html">
                        <img src="../imagenes/logo.png" width="50" height="50" alt="logo"></a>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bell"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#"><img src="../imagenes/001.png" width="30"
                                                height="30" alt="logo">
                                            Username2 comentó tu post</a>
                                        <a class="dropdown-item" href="#"><img src="../imagenes/Pikachu.png" width="30"
                                                height="30" alt="logo">
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
    <!--navbar-->

    <br>
    <!--fila 1-->
    <div class="container-fluid">
        <div class="row">
            <!--editarperfil-->
            <div class="fotodeperfil col-2">
                <h3>Foto de perfil</h3>
                <img src="../imagenes/subirfoto.png" alt="" style="width:128px;height:128px;"><br><br>

                <button class="button"><span>Subir imagen</span></button><br>

            </div>

            <div class="col-7">
                <div class="editarestado">
                    <h3>Editar estado</h3>
                    <p class="estado">ipsum dolor sit amet consectetur adipisicing elit. Architecto animi
                        voluptatumautem quis ut expedita dolore deserunt in.</p>
                    <textarea textarea rows="2" cols="40" style="resize: none"
                        placeholder="Hasta 100 caracteres."></textarea>
                </div>
                <hr class="hr">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9">
                            <form>
                                <h3>Cambiar contraseña</h3>
                                <h5>Contraseña actual</h5>
                                <input type="password" id="password" placeholder="Contraseña"><br><br>
                                <h5>Nueva contraseña:</h5>
                                <input type="password" id="password" placeholder="Contraseña"><br><br>
                                <button class="button"><span>Cambiar contraseña</span></button><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--barra lateral-->
            <div class="lateral col-3">
                <h3>Datos personales</h3>
                <form>
                    <p>Fecha de nacimiento:</p>
                    <input type="date"> <br><br>

                </form>
                <h3>Gustos</h3>

                <form>
                    <label for="">Selecciona los géneros que te gustan</label><br>
                    <input type="checkbox" name="Genero" value="1">Rock<br>
                    <input type="checkbox" name="Genero" value="2" checked>Pop<br>
                    <input type="checkbox" name="Genero" value="3">Electrónica<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                    <input type="checkbox" name="Genero" value="3">Genero<br>
                </form>
                <br>
                <h3>Editar comunidades</h3>
                <form>
                    <input type="checkbox" name="Genero" value="1"><a href="comunidades.html">Comunidad1</a><br>
                    <input type="checkbox" name="Genero" value="2"><a href="comunidades.html">Comunidad2</a><br>
                    <input type="checkbox" name="Genero" value="3"><a href="comunidades.html">Comunidad3</a><br>
                </form>
                <button class="button"><span>Crear comunidad</span></button>
                <br>

                <h3>Editar amigos</h3>
                <input type="checkbox" name="Genero" value="1"><img src="../imagenes/001.png" width="40" height="40"
                    alt="logo"><a href="username2.html">Username2</a><br>

                <input type="checkbox" name="Genero" value="1"><img src="../imagenes/Pikachu.png" width="40" height="40"
                    alt="logo"><a href="username2.html">Username3</a><br>

                <input type="checkbox" name="Genero" value="1"><img src="../imagenes/001.png" width="40" height="40"
                    alt="logo"><a href="username2.html">Username4</a><br>
                <button class="button"><span>Eliminar amigos</span></button><br>
                <button class="button"><span><a href="friends.html">Ver lista de amigos</a></span></button>
                <br><br><br>
            </div>
        </div>
    </div>



    <!--footer-->
    <div class="footer">
        <p>Creado para ComIT (2019)</p>
    </div>
    <!--footer-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <script src="../js/editarperfil.js">
    </script>
</body>

</html>