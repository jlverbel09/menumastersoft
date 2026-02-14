
<!-- Navegación Inferior -->
<nav class="bottom-nav">
    <a type="button" class="nav-item active">
        <i class="bi bi-house-door-fill"></i>
        Inicio
    </a>
    <!-- <a href="#" class="nav-item">
        <i class="bi bi-book"></i>
        Carta
    </a> --><!-- 
        <a href="#" class="nav-item">
            <i class="bi bi-cart3"></i>
            Pedido
        </a> -->
    <a type="button" onclick="llamarMesero(<?= $_GET['m'] ?>)" class="nav-item">
        <i class="bi bi-person"></i>
        Mesero
    </a>
</nav>