<?php $__env->startSection('content'); ?>

    <h1> TEST</h1>
    <h1><?php echo e($title); ?></h1>
    <p><?php echo e($text); ?></p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kamal/.dev/bases/src/views/page.blade.php ENDPATH**/ ?>