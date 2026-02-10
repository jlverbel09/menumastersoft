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

<body>

    <!-- Hero Header -->
    <header class="hero-section">
        <div class="d-flex align-items-center gap-3 position-absolute top-0 end-0 p-3">
            <span class="mesa-badge">Mesa 08</span>
            <div class="theme-toggle" id="themeBtn">
                <i class="bi bi-moon-stars-fill"></i>
            </div>
        </div>
        <!-- Reemplazar con la URL de tu imagen de logo cargada anteriormente -->
        <img src="./assets/img/logo_arriba.png" alt="MenuMasterSoft" class="main-logo">
        <div class="welcome-text">
            <h1>¡Hola! Bienvenido</h1>
            <p><i class="bi bi-geo-alt-fill me-1"></i> Restaurante "Nazca" - Mesa 08</p>
        </div>
    </header>

    <!-- Buscador -->
    <div class="search-box">
        <div class="search-input-wrapper">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="¿Qué se te antoja hoy?">
        </div>
    </div>


    <!-- bienvenida  -->
    <div class="container mt-5 text-center d-none">
        <h2 class="fw-bold">Bienvenido a MenuMasterSoft</h2>
        <p class="text-muted">Escanea, Pide y Disfruta.</p>

        <button class="btn btn-primary px-4 py-2" style="background-color: var(--color-principal); border: none; border-radius: 12px;">
            Ver Menú Digital
        </button>
    </div>

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

    <a href="#" class="floating-cart">
        <span><i class="bi bi-bag-check-fill me-2"></i> Mi Pedido (2)</span>
        <span class="fw-bold">$18.50</span>
    </a>

    <div class="m-5 p-1"></div>

    <!-- Navegación Inferior -->
    <nav class="bottom-nav">
        <a href="#" class="nav-item active">
            <i class="bi bi-house-door-fill"></i>
            Inicio
        </a>
        <a href="#" class="nav-item">
            <i class="bi bi-book"></i>
            Carta
        </a><!-- 
        <a href="#" class="nav-item">
            <i class="bi bi-cart3"></i>
            Pedido
        </a> -->
        <a href="#" class="nav-item">
            <i class="bi bi-person"></i>
            Mesero
        </a>
    </nav>

</body>

</html>