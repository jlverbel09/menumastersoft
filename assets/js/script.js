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
        $('.carrito-btn.carrito-pedido span').eq(0).html('<i class="bi bi-send me-2"></i> Mi Pedido (' + contador + ')');
        $('.carrito-btn.carrito-enviar span').eq(0).html('<i class="bi bi-send me-2"></i> <b>Enviar Pedido a cocina</b> (' + contador + ')');
        $('.carrito-btn.carrito-pedido span').eq(1).html('$' + precio.toFixed(2));
        $('.carrito-btn.carrito-enviar span').eq(1).html('$' + precio.toFixed(2));
    } else {
        $('.carrito-btn').css('display', 'none');
    }
}

function deleteFromCart(idproducto, nombre, precioProducto, foto) {
    contador--;
    precioProducto = parseFloat(precioProducto);

    carrito = carrito.filter(producto => producto.id != idproducto);
    precio -= precioProducto;
    if (contador > 0) {
        $('.carrito-btn').css('display', 'flex');
        $('.carrito-btn.carrito-pedido span').eq(0).html('<i class="bi bi-send me-2"></i> Mi Pedido (' + contador + ')');
        $('.carrito-btn.carrito-enviar span').eq(0).html('<i class="bi bi-send me-2"></i> <b>Enviar Pedido a cocina</b> (' + contador + ')');
        $('.carrito-btn.carrito-pedido span').eq(1).html('$' + precio.toFixed(2));
        $('.carrito-btn.carrito-enviar span').eq(1).html('$' + precio.toFixed(2));

    } else {
        $('.carrito-btn').css('display', 'none');
        $('.contenido-carrito .list-items-carrito').html('<span>No tienes ningún pedido aún</span>')
    }
    $(`#productoCarrito${idproducto}`).remove()

}



function verCarrito() {

    let contenido = '<div class="cabeceraPedido"><h3 class="text-center m-0">Mi Pedido</h3><button onclick="cerrarCarrito()" class="btn-add btn-lg border h2 m-0"><i class="bi bi-x-circle"></i></button></div>';

    contenido += '<div class="list-items-carrito">'

    carrito.forEach(item => {

        contenido += `<div class="item-row" id="productoCarrito${item.id}"> <img src="${item.foto}" class="item-img">
                <div class="item-info">
                    <div class="item-name">${item.nombre.charAt(0).toUpperCase() + item.nombre.slice(1).toLowerCase()}</div>
                    <div class="item-price fw-bold">$ ${item.precio.toFixed(2)}</div>
                </div> <button class="btn-add bg-danger" onclick="deleteFromCart(${item.id},'${item.nombre.charAt(0).toUpperCase() + item.nombre.slice(1).toLowerCase()}',${item.precio.toFixed(2)},'${item.foto}')"><i class="bi bi-trash"></i></button>
            </div>`;
    });

    contenido += `</div><a type="button"  onclick="enviarMiCarrito()" class="floating-cart carrito-btn carrito-enviar" style="display: flex;">
    <span><i class="bi bi-send me-2"></i> <b>Enviar Pedido a cocina</b> (${contador})</span>
    <span class="fw-bold">$${precio.toFixed(2)}</span>
</a>`;

    $('#contenido-carrito').html(contenido);
    $('#contenido-carrito').css('display', 'block');

    $('.contenido-carrito').css('opacity', '0').animate({ opacity: 1 }, 500);

}
