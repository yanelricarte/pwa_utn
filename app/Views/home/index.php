<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<h1 class="text-primary">¡Bienvenid@ al Catálogo!</h1>
<p>Gestioná tus productos de forma simple, rápida y clara.</p>

<p>
    <a href="<?= site_url('stock') ?>" class="btn btn-outline-primary">Ver productos</a>
    <a href="<?= site_url('productos/crear') ?>" class="btn btn-primary">Agregar producto</a>
</p>

<?= $this->endSection() ?>
