<!-- src/views/index.blade.php -->


<?php $__env->startSection('title', 'Página de Inicio'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Bienvenido a la Página de Inicio</h2>
    <p>Este es un sitio web para gestionar empresas.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>