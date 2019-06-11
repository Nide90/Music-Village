<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<html>

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
  <link rel="stylesheet" href="../estilos/notificaciones.css">
  <title>RED SOCIAL: notificaciones</title>

  <script type="text/javascript">
    var x = $("document");
    x.ready(inicio);

    function inicio() {
      $("#btn").click(saludo);
    }

    function saludo() {
      alert("Notificaciones en la aplicación activas");
    }
  </script>
  <script type="text/javascript">
    var x = $("document");
    x.ready(inicio);

    function inicio() {
      $("#btnn").click(saludo);
    }

    function saludo() {
      alert("Notificaciones en email activas");
    }
  </script>
</head>



</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="row nav">

        <!--logo-->
        <div class="col-3">
          <a href="home.html">
            <img src="../img/logo.png" width="40" height="40" alt="logo"></a>
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

              <div class="inbox">
                <li class="nav-item">
                  <a class="nav-link" href="../inbox.html">
                    <i class="fa fa-envelope"></i>
                  </a>
                </li>
              </div>

              <div class="amigos">
                <li class="nav-item">
                  <a class="nav-link" href="../friends.html">
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
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-cog"></i>
                  </a>


                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Administrar comunidades</a>
                    <a class="dropdown-item" href="notificaciones.html">Configurar notificaciones</a>
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


  <h3 class="titulo">Configurar notificaciones</h3><br>
  <div class="container-fluid">
    <div class="row">
      <div class="contenido col-1">
      </div>

      <div class="lateral col-7 offset">
        <h5>En la RS</h5><br>
        <h5>E-mail</h5>
        <br>
        <hr>
      </div>
      <div class="botones col-1">
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <br><br>
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
      </div>
      <div class="col-3">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nam vel iure facilis saepe nulla neque ducimus, enim hic, repudiandae facere quisquam, ad velit sit possimus a esse quidem qui!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa maxime fugit, at libero aperiam sed natus inventore exercitationem molestiae quia quis soluta perferendis ab omnis repellat laudantium dolorum temporibus.</p>
      </div>

    </div>
  </div>


  <div class="footer">
    <p>Creado para ComIT (2019)</p>
  </div>

</body>

</html>