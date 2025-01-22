<?php $__env->startSection('content'); ?>
    <h1>Hola Mundo</h1>
    <p>¡Bienvenido a la página de inicio!</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>