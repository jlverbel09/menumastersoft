$(document).ready(function () {
    contador = 0;
    precio = 0;
    carrito = [];
});

function addToCart(idproducto, nombre, precioProducto, foto) {
    contador++;
    precioProducto = parseFloat(precioProducto);

    carrito.push({ id: idproducto, nombre: nombre, precio: precioProducto, foto: foto });

    precio += precioProducto;
    if (contador > 0) {
        $('.carrito-btn').css('display', 'flex');
        $('.carrito-btn span').eq(0).html('<i class="bi bi-bag-check-fill me-2"></i> Mi Pedido (' + contador + ')');
        $('.carrito-btn span').eq(1).html('$' + precio.toFixed(2));
    } else {
        $('.carrito-btn').css('display', 'none');
    }
}
function verCarrito() {

    let contenido = '<h3 class="text-center w-100">Mi Pedido</h3>';
    carrito.forEach(item => {

        contenido += `<div class="item-row"> <img src="${item.foto}" class="item-img">
                <div class="item-info">
                    <div class="item-name">${item.nombre.charAt(0).toUpperCase() + item.nombre.slice(1).toLowerCase()}</div>
                    <div class="item-price fw-bold">$ ${item.precio.toFixed(2)}</div>
                </div> <button class="btn-add bg-danger" onclick="eliminar()"><i class="bi bi-trash"></i></button>
            </div>`;
    });
    $('#contenido-carrito').html(contenido);
    $('#contenido-carrito').css('display', 'block');

    $('.contenido-carrito').css('opacity', '0').animate({ opacity: 1 }, 500);

}
