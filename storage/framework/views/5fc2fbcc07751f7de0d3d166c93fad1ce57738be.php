<!-- show.blade.php -->

<style>
 .display-comment .display-comment {
 margin-left: 40px
 }
</style>
<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-body">
 <h5><b>Title:<?php echo e($post->title); ?></b></h5>
 <p><b>Description:</b>
 <?php echo e($post->body); ?>

 </p>
 <hr />
 <h4>Display Comments</h4>
 <?php echo $__env->make('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <hr />
 <h4>Add comment</h4>
 <form method="post" action="<?php echo e(route('comment.add')); ?>">
 <?php echo csrf_field(); ?>
 <div class="form-group">
 <input type="text" name="comment_body" class="form-control"  required />
 <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>" />
 </div>
<div class="form-group">
 <input type="submit" class="btn btn-warning" value="Add Comment" />
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/show.blade.php ENDPATH**/ ?>