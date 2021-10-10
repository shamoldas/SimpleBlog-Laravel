
<?php $__env->startSection('content'); ?>



<section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <h5><b>Book Name:</b><?php echo e($posts->title); ?></h5>
                    <p style="text-align: justify;"><strong>Description:</strong><?php echo e($posts->body); ?></p>
                    <div class="pull-right">
                    	<a class="btn btn-info" href="" class="btn btn-primary">Comment</a>
                    </div>
                    <hr>        

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
        </div>
    </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/userpost.blade.php ENDPATH**/ ?>