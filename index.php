<?php

include 'header.php';
if (isset($_GET['n']) && isset($_GET['m']) && !isset($_GET['u'])) {
?>
    <!-- bienvenida  -->
    <form action="index.php?n=<?= $_GET['n'] ?>&m=<?= $_GET['m'] ?>&u=<?= $_GET['u'] ?? '' ?>" method="GET" id="formulario">
        <input type="text" name="n" value="<?= $_GET['n'] ?>" hidden>
        <input type="text" name="m" value="<?= $_GET['m'] ?>" hidden>
        <div class="container mt-5 text-center ">
            <h2 class="fw-bold">Bienvenido a MenuMasterSoft</h2>
            <p class="text-muted">Escanea, Pide y Disfruta.</p>
            <div class="search-box d-flex justify-content-center mt-4">
                <div class="search-input-wrapper">
                    <i class="bi bi-person"></i>
                    <input required type="text" id="u" name="u" placeholder="¿Cuál es tu nombre?">
                </div>
            </div>
            <button id="btn-toggle" onclick="acceder()" type="button" class="btn btn-primary px-4 py-2 mt-3" style="background-color: var(--color-principal); border: none; border-radius: 12px;">
                Ver Menú Digital
            </button>

        </div>
    </form>
<?php

} else if (isset($_GET['n']) && isset($_GET['m']) && isset($_GET['u'])) {

?>
    <?php

    /* DATOS DE CATEGORIA */
    $categoria = $conexion->prepare("SELECT * FROM categoria WHERE id_negocio = :id_negocio");
    $categoria->bindParam(':id_negocio', $_GET['n']);
    $categoria->execute();
    $categoria = $categoria->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <!-- categorias -->
    <div class="categories-wrapper">
        <div class="cat-item active">🔥 Populares</div>
        <?php foreach ($categoria as $cat) : ?>
            <div class="cat-item" onclick="selectCategory(this)">🔥<?= ucfirst(strtolower($cat['nombre'])) ?></div>
        <?php endforeach; ?>
    </div>




    <?php
    $producto = $conexion->prepare("SELECT * FROM producto WHERE estado = 'A' AND id_negocio = :id_negocio");
    $producto->bindParam(':id_negocio', $_GET['n']);
    $producto->execute();
    $producto = $producto->fetchAll(PDO::FETCH_ASSOC);


    $categorias = '';
    foreach ($producto as $prod) :

    ?>
        <div class="container mt-3">
            <?php if ($prod['categoria'] != $categorias) : ?>
                <h6 class="fw-bold mb-3 text-secondary"><?= strtoupper($prod['categoria']) ?></h6>
            <?php endif; ?>
            <?php $categorias = $prod['categoria']; ?>

            <div class="item-row"> <img src="<?= $prod['img_url'] ?>" class="item-img">
                <div class="item-info">
                    <div class="item-name"><?= ucwords(strtolower($prod['nombre'])) ?></div>
                    <div class="item-price fw-bold">$<?= number_format($prod['precio'], 2) ?></div>
                </div> <button type="button" class="btn-add" onclick="addToCart('<?= $prod['id'] ?>', '<?= $prod['nombre'] ?>', <?= $prod['precio'] ?>, '<?= $prod['img_url'] ?>')"><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>

    <?php endforeach; ?>
    <!-- contenido -->


    <script>
        function selectCategory(element) {
            const categories = document.querySelectorAll('.cat-item');
            categories.forEach(cat => cat.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
    <script src="./assets/js/jquery.js"></script>

    <?php
    include 'carrito.php';
    ?>

    <div class="m-5 p-1"></div>

<?php
    include 'main.php';
} else if (!isset($_GET['n']) || !isset($_GET['m'])) {
    include 'error.php';
} else if (isset($_GET['n']) && isset($_GET['m']) && !isset($_GET['u'])) {
    include 'error.php';
} else if (isset($_GET['n']) && isset($_GET['m']) && isset($_GET['u'])) {
    include 'error.php';
} else {
    include 'index.php';
}


include 'footer.php';
?>