function contenidoCarrito(){
    $('.carrito-btn').css('display', 'flex');
    $('.contenido-carrito').css('opacity', '1').animate({ opacity: 0 }, 500);
    setTimeout(function () {
        $('#contenido-carrito').css('display', 'none');
    }, 500);
}



function acceder() {
    if (document.getElementById('u').value != '') {
        document.getElementById('formulario').submit()
    } else {
        alert('Ingrese su nombre para acceder al menú')
    }
}

if (document.getElementById('btnFullscreen')) {
    document.getElementById('btnFullscreen').addEventListener('click', function (e) {
        e.preventDefault();

        const iconMax = document.getElementById('icon-maximize');
        const iconMin = document.getElementById('icon-minimize');

        if (!document.fullscreenElement) {
            // Entrar en pantalla completa
            document.documentElement.requestFullscreen().then(() => {
                iconMax.style.display = 'none';
                iconMin.style.display = 'inline-block';
            }).catch(err => {
                console.error(`Error al intentar entrar en fullscreen: ${err.message}`);
            });
        } else {
            // Salir de pantalla completa
            document.exitFullscreen();
            iconMax.style.display = 'inline-block';
            iconMin.style.display = 'none';
        }
    });

    document.getElementById('fullpantalla2').addEventListener('click', function (e) {
        e.preventDefault();

        const protector = document.getElementById('protector');

        if (!document.fullscreenElement) {
            // Entrar en pantalla completa
            document.documentElement.requestFullscreen().then(() => {
                protector.style.display = 'none';
            }).catch(err => {
                console.error(`Error al intentar entrar en fullscreen: ${err.message}`);
            });
        } else {
            // Salir de pantalla completa
            document.exitFullscreen();
            protector.style.display = 'inline-block';
        }
    });
}




// Escuchar cambios (por si el usuario presiona ESC)
document.addEventListener('fullscreenchange', () => {

    const iconMax = document.getElementById('icon-maximize');
    const iconMin = document.getElementById('icon-minimize');

    if (!document.fullscreenElement) {
        iconMax.style.display = 'inline-block';
        iconMin.style.display = 'none';
    }

});
