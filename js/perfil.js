$(document).ready(function () {
    $("#inboxdestino").hide();
    $("#crearmensaje").hide();
 
    $("#inbox").click(function () {
        $("#inboxdestino").html(
            '<h3>Mensajes</h3>' +
            '<div class="enviarmensaje">' +
            '<button class="button" style="vertical-align:middle" id="enviarmensajedestino"><span>Componer mensaje</span></button>' +
            '</div>' +
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
        );

        if($("#actividad").is(":visible")){
            $("#actividad").hide();
            $("#inboxdestino").show();
        } else {
            $("#actividad").show();
            $("#inboxdestino").hide();
        }
        if($("#crearmensaje").is(":visible")){
            $("#crearmensaje").hide();
        }
    });

    $(document).on("click","#enviarmensajedestino",function () {
        if($("#inboxdestino").is(":visible")){
            $("#inboxdestino").hide();
            $("#crearmensaje").show();
        }
    });

        $("#cerrar").click(function () {
            $("#crearmensaje").hide();

        $("#inboxdestino").show()
        });
});
