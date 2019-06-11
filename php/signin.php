<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Red social: Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../estilos/SignIn.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="flotante col-lg-4 col-md-4 col-sm-4 col-8  offset-2">
                <div class="imagen">
                    <img src="../imagenes/logo.png" alt="red social" style="width:50px;height:55px;">
                </div>

                <h3 class="titulo">Registrarse</h3>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 offset-1">


                            <!--formularios // PHP-->
                                <form action="../php/registro.php" method="post">
                                    <input type="text" placeholder="Username" name="username" class="form-control" required><br>
                                    <input type="email" placeholder="Email" class="form-control" name="email" required><br>
                                    <input type="password" id="password" placeholder="Contraseña" class="form-control" name="contraseña" required><br>
                                
                                <!--terminos y condiciones-->
                                <div class="condiciones">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="checkbox" class="checkbox" required>Aceptar términos y condiciones
                                                <br>
                                                <div id="link1">
                                                    <h4 class="lala">Información relevante</h4>
                                                    <p class="terminos">Es requisito necesario para la adquisición de
                                                        los productos que
                                                        se ofrecen en este sitio, que lea y acepte los siguientes
                                                        Términos y Condiciones que a continuación se redactan. El uso de
                                                        nuestros servicios así como la compra de nuestros productos
                                                        implicará que usted ha leído y aceptado los Términos y
                                                        Condiciones de Uso en el presente documento</p>
                                                    <p class="terminos">El usuario puede elegir y cambiar la clave para
                                                        su acceso de
                                                        administración de la cuenta en cualquier momento, en caso de que
                                                        se haya registrado y que sea necesario para la compra de alguno
                                                        de nuestros productos. no asume la responsabilidad en caso de
                                                        que entregue dicha clave a terceros.</p>
                                                    <h4 class="lala">Uso no autorizado</h4>
                                                    <p class="terminos">En caso de que aplique (para venta de software,
                                                        templetes, u otro
                                                        producto de diseño y programación) usted no puede colocar uno de
                                                        nuestros productos, modificado o sin modificar, en un CD, sitio
                                                        web o ningún otro medio y ofrecerlos para la redistribución o la
                                                        reventa de ningún tipo.</p>
                                                    <h4 class="lala">Privacidad</h4>
                                                        <p class="terminos">Este sitio web garantiza que la información
                                                            personal que
                                                            usted envía cuenta con la seguridad necesaria. Los datos
                                                            ingresados por usuario o en el caso de requerir una
                                                            validación de los pedidos no serán entregados a terceros,
                                                            salvo que deba ser revelada en cumplimiento a una orden
                                                            judicial o requerimientos legales.</p>
                                                        <p class="terminos">Reserva los derechos de cambiar o de
                                                            modificar estos términos
                                                            sin previo aviso.</p>

                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <i class="far fa-file-alt" id="showme1"></i><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="button" id="boton-loguear"><span>Registrarse</span></button>
                                </form>

                            ¿Ya tenés cuenta? <a href="login.html">Inicia sesión</a>.
                            <br><br>
                        </div>
                    </div>
                </div>

                <!--footer-->
                <div class="footer">
                    <p>Creado para ComIT (2019)</p>
                </div>


                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                    crossorigin="anonymous"></script>
                <script src="../js/signin.js"></script>
</body>

</html>