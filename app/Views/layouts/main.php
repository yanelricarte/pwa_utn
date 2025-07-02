<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Catálogo') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= site_url('/') ?>">Catálogo</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?= uri_string() == '' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link <?= uri_string() == 'stock' ? 'active' : '' ?>" href="<?= site_url('stock') ?>">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('productos/crear') ?>">Nuevo</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-4">
    <?= $this->renderSection('contenido') ?>
</main>

</body>
</html>
