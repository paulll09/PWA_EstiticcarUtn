<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<h2>Agregar nuevo auto</h2>

<form action="<?= base_url('autos/guardar') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Modelo</label>
        <input type="text" name="modelo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Kilometraje</label>
        <input type="number" name="kilometraje" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Imagen</label>
        <input type="file" name="imagen" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar Auto</button>
</form>

<?= $this->endSection() ?>