$(document).ready(function () {
    $("#inboxdestino").hide();

    $("#inbox").click(function () {
        $("#inboxdestino").html(
            '<h3>Mensajes</h3>' +
            '<div class="enviarmensaje">'+
            '<i class="far fa-envelope" id="enviarmensaje"></i>'+
            '</div>'+
            '<br>' +
            '<div class="mensaje container-fluid">' +
            '<div class="row">' +
            '<div class="imagen col-1">' +
            '<img src="../img/Pikachu.png" width="50" height="50" alt="logo">' +
            '</div>' +
            '<div class="datosuser col-3">' +
            '<h5>username2</h5>' +
            '<p>02/02/19</p>' +
            '</div>' +
            '<div class="vistaprevia col-8">' +
            '<h5>titulo</h5>' +
            '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatem, distinctio doloribus' +
            'necessitatibus dolorum laudantium accusamus illo, sapiente corporis voluptate cum assumenda iusto,' +
            'error temporibus sunt omnis iste at repudiandae.</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<hr>' +
            '<div class="mensaje container-fluid">' +
            '<div class="row">' +
            '<div class="imagen col-1">' +
            '<img src="../img/001.png" width="50" height="50" alt="logo">' +
            '</div>' +
            '<div class="datosuser col-3">' +
            '<h5>username3</h5>' +
            '<p>02/01/19</p>' +
            '</div>' +
            '<div class="vistaprevia col-8">' +
            '<h5>titulo</h5>' +
            '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatem, distinctio doloribus' +
            'necessitatibus dolorum laudantium accusamus illo, sapiente corporis voluptate cum assumenda iusto,' +
            'error temporibus sunt omnis iste at repudiandae.</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        ).toggle();
    });

    $("#inbox").click(function () {
        $("#actividad").toggle()
    });
});

$(document).ready(function () {
        $("#enviarmensajedestino").hide();

    $("#enviarmensaje").click(function () {
        $("#enviarmensajedestino").html(
            '<h3>Enviar mensaje</h3>'+
            '<form>'+
              '<from action="" method="GET"></from>'+
              '<input type="text" placeholder="Para:"><br><br>'+
              '<input type="text" placeholder="Asunto:"><br><br>'+
              '<textarea placeholder="Escribir mensaje" textarea rows="5" cols="90" style="resize: none"></textarea><br><br>'+
              '<button class="button" style="vertical-align:middle"><span>Enviar</span></button>'+
            '</form>'
        ).toggle();
    });

    $("#enviarmensaje").click(function () {
        $("#inbox").toggle()
    });
});
