<?= $this->extend('layouts/main') ?>
<?= $this->section('contenido') ?>

<div class="hero bg-dark text-white d-flex align-items-center" style="min-height: 80vh; background-image: url('<?= base_url('') ?>'); background-size: cover; background-position: center;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Bienvenido a Esteticar SRL</h1>
        <p class="lead mb-4">Tu próximo auto te está esperando. Mirá nuestro catálogo completo.</p>
        <a href="<?= base_url('catalogo') ?>" class="btn btn-primary btn-lg">Ver Catálogo</a>
    </div>
</div>


<?= $this->endSection() ?>
