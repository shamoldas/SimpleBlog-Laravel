
     
<?php $__env->startSection('content'); ?>

<!--
<section>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <center><h3 style="color:#0A84AC;letter-spacing: 8px;"><b>BOOK LIST</b></h3></center>

          </div>
        </div>
      </div>
</section>


-->
<section>

      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color:#0A84AC;letter-spacing: 8px;text-shadow: .2em .2em .1em gray;"><b>BOOK LIST</b></h3></center>

          </div>
        </div>
      </div>
</section>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <figure>
                        <picture>
                         
                            <img src="image/<?php echo e($product->image); ?>" height="500px" width="300px" class="img-thumbnail">                        
                        </picture>  
                    </figure>
                </div>
                <div class="col-md-8">

                    <h5><b>Book Name:</b><?php echo e($product->name); ?></h5>
                    <p style="text-align: justify;"><strong>Description:</strong><?php echo e($product->detail); ?></p>
                    <hr>        
                  
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
        </div>
    </div>
</div>

    <ul class="pagination">
        
        <li class="page-item"><a class="page-link" href="<?php echo e($products->previouspageUrl()); ?>">Previous</a></li>
        <li class="page-item"><a class="page-link" href="<?php echo e($products->nextpageUrl()); ?>">Next</a></li>
    </ul>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/products/showbooks.blade.php ENDPATH**/ ?>