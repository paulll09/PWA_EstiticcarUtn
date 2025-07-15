<?= $this->extend('layouts/main') ?>

<?= $this->section('contenido') ?>
<h1 class="text-primary text-center mb-4">Catálogo</h1>

<div class="row">
    <?php foreach ($autos as $auto): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                
                <?php if ($auto['imagen']): ?>
                    <img src="<?= base_url('uploads/autos/' . $auto['imagen']) ?>" class="card-img-top" alt="Imagen de <?= esc($auto['modelo']) ?>">
                <?php endif; ?>

                <div class="card-body">
                    <h5 class="card-title"><?= esc($auto['marca']) ?> <?= esc($auto['modelo']) ?></h5>
                    <a href="<?= site_url('stock/verDetalles/' . $auto['id_auto']) ?>" class="btn btn-primary">Ver Características</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>
