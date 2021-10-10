
<?php $__env->startSection('content'); ?>

<section>
  <div class="row">
        <div class="col-lg-12 margin-tb">
        	 <br />
            <div class="pull-left">
                <h2>Add Your Blog Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('posts')); ?>"> Back</a>
            </div>
        </div>
    </div>
 </section>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Create Blog Post</div>
				<div class="card-body">
					<form method="post" action="<?php echo e(route('post.store')); ?>">
						<div class="form-group">
						<?php echo csrf_field(); ?>
							<label class="label">Blog Title: </label>
							<input type="text" name="title" class="form-control" required/>
						</div>
						<div class="form-group">
							<label class="label">Blog Body: </label>
							<textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/create.blade.php ENDPATH**/ ?>