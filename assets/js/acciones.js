function cerrarCarrito() {
    $('.contenido-carrito').css('opacity', '1').animate({ opacity: 0 }, 500);
    setTimeout(function () {
        $('#contenido-carrito').css('display', 'none');
    }, 500);
}
function selectCategory(element, categoria = '') {
    const categories = document.querySelectorAll('.cat-item');
    categories.forEach(cat => cat.classList.remove('active'));
    element.classList.add('active');

    if (!categoria == '') {
        $('.listProductos').css('display', 'none')
        $('.' + categoria).show();
    } else {
        $('.listProductos').css('display', 'block')
    }
}

function llamarMesero(idMesa) {
    alert('llamando mesero, mesa #'+idMesa)
}

function enviarMiCarrito() {
    alert('carrito enviado')
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

}

if (document.getElementById('fullpantalla2')) {
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

if($("#buscadorClasesProductos").length > 0 ) {


    $("#buscadorClasesProductos").on("keyup", function () {
        var valorBusqueda = $(this).val().toLowerCase();

        $(".listProductos").each(function () {
            var textoElemento = $(this).text().toLowerCase();
            // Si el texto coincide
            if (textoElemento.indexOf(valorBusqueda) > -1) {
                $(this).fadeIn(300); // Aparece suavemente en 300ms
            } else {
                $(this).fadeOut(300); // Desaparece suavemente en 300ms
            }
        });

    });
}