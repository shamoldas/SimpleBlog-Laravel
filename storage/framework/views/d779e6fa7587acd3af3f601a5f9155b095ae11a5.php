<!-- _comment_replies.blade.php -->

 <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="display-comment">
        <strong><?php echo e($comment->user->name); ?></strong>
        <p><?php echo e($comment->body); ?></p>
        <a href="" id="reply" required></a>
        <form method="post" action="<?php echo e(route('reply.add')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" required />
                <input type="hidden" name="post_id" value="<?php echo e($post_id); ?>" />
                <input type="hidden" name="comment_id" value="<?php echo e($comment->id); ?>" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        <?php echo $__env->make('partials._comment_replies', ['comments' => $comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/partials/_comment_replies.blade.php ENDPATH**/ ?>