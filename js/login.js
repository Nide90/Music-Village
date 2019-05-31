$(document).ready(function(){
    var usuario = "lute";
    var password = "1234";
    var inputPassword = $("#login-password").val();
    var inputUsuario = $("#login-user").val();

    $("#boton-loguear").click(function(){
        if (inputUsuario === "" || 
            inputPassword === "") {
            alert("Completar todos los campos.")
        } else {
            if (inputUsuario === usuario && 
                inputPassword === password) {
                alert("Login correcto");
            } else {
               alert("Usuario y/o contraseña incorrectos");
            }
        }
    });
});