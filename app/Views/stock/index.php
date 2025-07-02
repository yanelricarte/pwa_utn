<!-- app/Views/stock/index.php  (versión con estilos) -->
<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<h2>Listado de productos</h2>

<a href="<?= site_url('productos/crear') ?>" class="btn btn-primary mb-2">+ Nuevo producto</a>

<table class="table table-striped">
   <thead>
      <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Stock</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($productos as $p): ?>
         <tr>
            <td><?= $p->id ?></td>
            <td><?= esc($p->nombre) ?></td>
            <td><span class="badge bg-secondary"><?= $p->stock ?></span></td>
            <td>
               <a href="<?= site_url('stock/verDetalle/' . $p->id) ?>" class="btn btn-outline-secondary btn-sm">Detalle</a>
               <a href="<?= site_url('stock/editar/' . $p->id) ?>" class="btn btn-outline-primary btn-sm">Editar</a>

               <!-- eliminar (próxima etapa) -->
               <button class="btn btn-outline-danger btn-sm" disabled>Eliminar</button>
            </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>

<?= $this->endSection() ?>