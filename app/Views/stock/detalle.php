<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<div class="card">
    <h3>Detalle del producto</h3>
    <p><strong>ID:</strong> <?= $producto->id ?></p>
    <p><strong>Nombre:</strong> <?= esc($producto->nombre) ?></p>
    <p><strong>Precio:</strong> $<?= number_format($producto->precio, 2) ?></p>
    <p><strong>Stock:</strong> <?= $producto->stock ?></p>
    <?php if ($producto->descripcion): ?>
        <p><strong>Descripción:</strong><br><?= esc($producto->descripcion) ?></p>
    <?php endif; ?>
    <a href="<?= base_url('stock') ?>" class="btn btn-secondary mt-1">Volver</a>
</div>

<?= $this->endSection() ?>