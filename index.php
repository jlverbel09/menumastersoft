<?php

include 'header.php';
if (isset($_GET['n']) && isset($_GET['m']) && !isset($_GET['u'])) {
?>


    <!-- bienvenida  -->
    <form action="index.php?n=<?= $_GET['n'] ?>&m=<?= $_GET['m'] ?>&u=<?= $_GET['u'] ?? '' ?>" method="GET">
        <input type="text" name="n" value="<?= $_GET['n'] ?>" hidden>
        <input type="text" name="m" value="<?= $_GET['m'] ?>" hidden>
        <div class="container mt-5 text-center ">
            <h2 class="fw-bold">Bienvenido a MenuMasterSoft</h2>
            <p class="text-muted">Escanea, Pide y Disfruta.</p>
            <div class="search-box d-flex justify-content-center mt-4">
                <div class="search-input-wrapper">
                    <i class="bi bi-person"></i>
                    <input required type="text" name="u" placeholder="¿Cuál es tu nombre?">
                </div>
            </div>
            <button class="btn btn-primary px-4 py-2 mt-3" style="background-color: var(--color-principal); border: none; border-radius: 12px;">
                Ver Menú Digital
            </button>
        </div>
    </form>
<?php

} else if (isset($_GET['n']) && isset($_GET['m']) && isset($_GET['u'])) {

?>


    <!-- categorias -->
    <div class="categories-wrapper">
        <div class="cat-item active">🔥 Populares</div>
        <div class="cat-item">🍕 Pizzas</div>
        <div class="cat-item">🍔 Hamburguesas</div>
        <div class="cat-item">🥤 Bebidas</div>
        <div class="cat-item">🍰 Postres</div>
    </div>


    <!-- contenido -->
    <div class="container mt-3">
        <h6 class="fw-bold mb-3 text-secondary">Pizzas</h6>

        <div class="item-row">
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=200" class="item-img">
            <div class="item-info">
                <div class="item-name">Pepperoni Supreme</div>
                <div class="item-price">$14.00</div>
            </div>
            <button class="btn-add"><i class="bi bi-plus-lg"></i></button>
        </div>

        <h6 class="fw-bold mt-4 mb-3 text-secondary">Bebidas</h6>

        <div class="item-row">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=500" class="item-img">
            <div class="item-info">
                <div class="item-name">Limonada de Coco</div>
                <div class="item-price">$4.50</div>
            </div>
            <button class="btn-add"><i class="bi bi-plus-lg"></i></button>
        </div>
    </div>


<?php
    include 'footer.php';
} else if (!isset($_GET['n']) || !isset($_GET['m'])) {
    include 'error.php';
} else if (isset($_GET['n']) && isset($_GET['m']) && !isset($_GET['u'])) {
    include 'error.php';
} else if (isset($_GET['n']) && isset($_GET['m']) && isset($_GET['u'])) {
    include 'error.php';        
} else {
    include 'index.php';
}