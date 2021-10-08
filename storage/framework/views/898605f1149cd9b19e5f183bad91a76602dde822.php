
<?php echo $__env->make('backEnd.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="padding:30px">
<?php echo $__env->yieldContent('mainContent'); ?>
</div>

<?php echo $__env->make('backEnd.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('css'); ?><?php /**PATH C:\xampp\htdocs\Celestialcode\infixEduV6.3.1\resources\views/backEnd/master.blade.php ENDPATH**/ ?>