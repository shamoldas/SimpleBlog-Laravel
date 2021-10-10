<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">

        <div class="row">
            <div class="col-md-8">
                <p>Content Page</p>
                  <?php echo $__env->yieldContent('content'); ?>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
       
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/home.blade.php ENDPATH**/ ?>