<!doctype html>
<html lang="es">

<head>
    <!-- Meta tags para configuración básica de la página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Esteticcar Automotores' ?></title>

    <!-- Enlaces a hojas de estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>"> <!-- Estilos personalizados -->

    <!-- Agregamos Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Estilos adicionales específicos de la página -->
    <?php if (isset($estilos_adicionales)): ?>
        <?= $estilos_adicionales ?>
    <?php endif; ?>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <?= view('layouts/header') ?>

    <!-- Contenido principal -->
    <main class="container my-4 flex-grow-1">
        <?= $this->renderSection('contenido') ?>
    </main>

    <!-- Footer -->
    <?= view('layouts/footer') ?>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>