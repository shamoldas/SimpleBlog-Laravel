
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row">
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4">
					<figure>
						<picture>
							<img src="images/shamol.jpg" class="img-thumbnail" >
							<source srcset="assets/image/cp100x50.jpeg" media="(max-width: 480px)">							
						</picture>	
					</figure>
				</div>
				<div class="col-md-8">
					
					foreach($posts as $post)
					
					<h4>Book Code:<?php echo e($post->id); ?></h4>
					<h5><b>Book Name:</b><?php echo e($post->title); ?></h5>
					<p style="text-align: justify;"><strong>Description:</strong><?php echo e($post->body); ?></p>
					<hr>		
					endforeach
					
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 		</div> 
		</div>
	</div>

	<ul class="pagination">
		
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->previouspageUrl()); ?>">Previous</a></li>
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->nextpageUrl()); ?>">Next</a></li>
	</ul>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/book/index.blade.php ENDPATH**/ ?>