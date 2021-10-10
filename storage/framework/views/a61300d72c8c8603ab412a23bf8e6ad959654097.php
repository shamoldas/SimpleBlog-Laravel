
<?php $__env->startSection('content'); ?>

<section>
	<div class="container">
	  <div class="row">
	        <div class="col-lg-12 ">
	        	 <br />
	            <div class="pull-left">
	                <h2>Add Your Book With Description</h2>
	            </div>
	            <div class="pull-left">
	                <a class="btn btn-success" href="<?php echo e(route('post.create')); ?>"> Create New Blog</a>
	            </div>
	        </div>
	    </div>
	  </div>
</section>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">

			    <?php if($message = Session::get('success')): ?>
			        <div class="alert alert-success">
			            <p><?php echo e($message); ?></p>
			        </div>
    			<?php endif; ?>
			<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Body</th>
				<th>Action</th>
			</thead>
				<tbody>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($post->id); ?></td>
					<td><?php echo e($post->title); ?></td>
					<td><?php echo e($post->body); ?></td>
			
				<td>
				 <form action="<?php echo e(route('post.destroy',$post->id)); ?>" method="POST">
     
                   <!--
                   <a class="btn btn-info" href="<?php echo e(route('post.show', $post->id)); ?>" class="btn btn-primary">Show Post</a>
               -->
					<a class="btn btn-primary" href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-primary">Edit</a
     
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
				</td>	
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>

	<ul class="pagination">
		
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->previouspageUrl()); ?>">Previous</a></li>
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->nextpageUrl()); ?>">Next</a></li>
	</ul>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/index.blade.php ENDPATH**/ ?>