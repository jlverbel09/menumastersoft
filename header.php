<?php
require_once 'db/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenuMasterSoft - Bienvenido</title>
    <!-- Bootstrap 5 & Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body id="contenido">


    <?php
    /* DATOS DE NEGOCIO */
    $negocio = $conexion->prepare("SELECT * FROM negocio WHERE id = :id");
    $negocio->bindParam(':id', $_GET['n']);
    $negocio->execute();
    $negocio = $negocio->fetch(PDO::FETCH_ASSOC);
    $id_negocio = $negocio['id'];
    $nombre_negocio = $negocio['nombre'];

    


    if (isset($_GET['n']) && isset($_GET['m']) && isset($_GET['u'])) :
    ?>

        <!-- Hero Header -->
        <header class="hero-section">
            <img class="restaurante-logo" src="./assets/img/logo_arriba.png" alt="">
            <div class="d-flex align-items-center gap-3 position-absolute top-0 end-0 p-3">
                <span class="mesa-badge">Mesa <?php echo str_pad($_GET['m'], 2, "0", STR_PAD_LEFT); ?></span>
                <!--  <div class="theme-toggle" id="themeBtn">
                    <i class="bi bi-moon-stars-fill"></i>
                </div> -->
            </div>
            <!-- Reemplazar con la URL de tu imagen de logo cargada anteriormente -->
            <img src="./assets/img/restaurante/<?php echo $id_negocio; ?>.png" alt="MenuMasterSoft" class="main-logo">
            <div class="welcome-text">
                <h1>¡Hola! <?= ucwords($_GET['u']) ?> Bienvenido</h1>
                <p><i class="bi bi-geo-alt-fill me-1"></i> Restaurante "<?= $nombre_negocio ?>" - Mesa <?php echo str_pad($_GET['m'], 2, "0", STR_PAD_LEFT); ?></p>
            </div>
        </header>

        <!-- Buscador -->
        <div class="search-box">
            <div class="search-input-wrapper">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="¿Qué se te antoja hoy?">
            </div>
        </div>

    <?php
    endif;
    ?>

    <?php
    if (isset($_GET['n']) && isset($_GET['m']) && !isset($_GET['u'])) :
    ?>

        <!-- Hero Header -->
        <header class="hero-section pb-0" style="background: none;">
            <img class="restaurante-logo" src="./assets/img/logo_arriba.png" alt="">
            <div class="d-flex align-items-center gap-3 position-absolute top-0 end-0 p-3">
                <span class="mesa-badge">Mesa <?php echo str_pad($_GET['m'], 2, "0", STR_PAD_LEFT); ?></span>
                <!--  <div class="theme-toggle" id="themeBtn">
                    <i class="bi bi-moon-stars-fill"></i>
                </div> -->
            </div>
            <!-- Reemplazar con la URL de tu imagen de logo cargada anteriormente -->
            <img src="./assets/img/restaurante/<?= $id_negocio ?>.png" alt="MenuMasterSoft" class="main-logo">

        </header>

    <?php
    endif;
    ?>