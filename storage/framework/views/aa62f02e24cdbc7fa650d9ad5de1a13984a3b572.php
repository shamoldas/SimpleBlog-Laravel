
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Book Add</div>
				<div class="card-body">
					<form method="post" action="<?php echo e(route('post.store')); ?>">
						<div class="form-group">
						<?php echo csrf_field(); ?>
							<label class="label">Book Title: </label>
							<input type="text" name="title" class="form-control" required/>
						</div>
						<div class="form-group">
							<label class="label"> Description: </label>
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
<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/book/create.blade.php ENDPATH**/ ?>