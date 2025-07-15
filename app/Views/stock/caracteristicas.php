<?= $this->extend('layouts/main') ?>

<?= $this->section('contenido') ?>

<div class="container">
    <h2 class="mb-4"><?= esc($auto['marca']) ?> <?= esc($auto['modelo']) ?></h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Precio: $<?= number_format($auto['precio'], 2) ?> ARS</h5>
            <p><strong>Kilometraje:</strong> <?= number_format($auto['kilometraje']) ?> km</p>
            <p><strong>Descripción:</strong><br> <?= esc($auto['descripcion']) ?></p>

            <a href="<?= base_url('/catalogo') ?>" class="btn btn-secondary mt-3">Volver al catálogo</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
