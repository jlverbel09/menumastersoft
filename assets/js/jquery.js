

$(document).ready(function () {

    $('#contenido-carrito').click(function () {
        $('.carrito-btn').css('display', 'flex');
        $('.contenido-carrito').css('opacity', '1').animate({ opacity: 0 }, 500);
        setTimeout(function () {
            $('#contenido-carrito').css('display', 'none');
        }, 500);
    });
    $('#btn-toggle').on('click', function () {
        alert()
        // Seleccionamos el contenedor que queremos expandir
        // Si quieres TODA la página, usa document.documentElement
        var elem = document.getElementById("contenido");

        if (!document.fullscreenElement &&
            !document.webkitFullscreenElement &&
            !document.mozFullScreenElement &&
            !document.msFullscreenElement) {

            // ENTRAR EN FULLSCREEN
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen(); // Chrome, Safari, Android
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }

            // OPCIONAL: Bloquear orientación horizontal en Android
            if (screen.orientation && screen.orientation.lock) {
                screen.orientation.lock('landscape').catch(function (error) {
                    console.log("La orientación no pudo bloquearse: " + error);
                });
            }

            $(this).text("Salir de Pantalla Completa");

        } else {
            // SALIR DE FULLSCREEN
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }

            $(this).text("Activar Pantalla Completa");
        }
    });

    // Detectar si el usuario sale con el botón "Atrás" de Android
    $(document).on('fullscreenchange webkitfullscreenchange mozfullscreenchange MSFullscreenChange', function () {
        if (!document.fullscreenElement && !document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
            $('#btn-toggle').text("Activar Pantalla Completa");
        }
    });
});