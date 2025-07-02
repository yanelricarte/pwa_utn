<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<h2><?= esc($titulo) ?></h2>

<form action="<?= isset($producto)
                    ? site_url('stock/actualizar/' . $producto->id)   // edición
                    : site_url('productos/guardar')                 // alta
                ?>" method="post">

    <div class="row">
        <div class="col">
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?= old('nombre', $producto->nombre ?? '') ?>" required>
        </div>
        <div class="col">
            <label>Precio ($)</label>
            <input type="number" step="0.01" name="precio" value="<?= old('precio', $producto->precio ?? '') ?>" required>
        </div>
        <div class="col">
            <label>Stock</label>
            <input type="number" name="stock" value="<?= old('stock', $producto->stock ?? '') ?>" required>
        </div>
    </div>

    <label>Descripción</label>
    <textarea name="descripcion" rows="3"><?= old('descripcion', $producto->descripcion ?? '') ?></textarea>

    <button class="btn btn-primary mt-1">Guardar</button>
    <a href="<?= base_url('stock') ?>" class="btn btn-secondary mt-1">Cancelar</a>
</form>

<?= $this->endSection() ?>