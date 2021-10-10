
<?php $__env->startSection('content'); ?>




<div class="container" style="margin-bottom:2em; ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <form action="<?php echo e(route('search')); ?>" method="GET">
                    <input type="text" name="search" required/>
                    <button type="submit">Search</button>
                </form>
         
            </div> 
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-7">
           
                <form action="<?php echo e(route('search')); ?>" method="GET">
                    <input type="text" name="search" required/>
                    <button type="submit">Search</button>
                </form>
         
        </div>
    </div>
</div>


<div class="container">
    <h1>Auto Complete Search</h1>   
    <input class="typeahead form-control" type="text">
</div>
   
<script type="text/javascript">
    var path = "<?php echo e(route('autocomplete')); ?>";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
             <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <h5><b>Title:</b><?php echo e($post->title); ?></h5>
                    <p style="text-align: justify;"><strong>Description:</strong><?php echo e($post->body); ?></p>

                    <div class="pull-right">
                    	<a class="btn btn-info" href="<?php echo e(route('post.show', $post->id)); ?>" class="btn btn-primary">Comment</a>
                    </div>

                    <hr>        

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
        </div>
    </div>


    <ul class="pagination">
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->previouspageUrl()); ?>">Previous</a></li>
		<li class="page-item"><a class="page-link" href="<?php echo e($posts->nextpageUrl()); ?>">Next</a></li>

	</ul>


</div>

<div class="container">



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/blog.blade.php ENDPATH**/ ?>