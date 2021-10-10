

<?php $__env->startSection('content'); ?>

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Category</h3>
  <br />
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
   <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>

  <div align="right">
   <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">Add</a>

   <br />
   <br />
  </div>

  <table class="table table-bordered table-striped">
   <tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>Delete</th>
   </tr>
   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
    <td><?php echo e($row['id']); ?></td>
    <td><?php echo e($row['c_name']); ?></td>
  
    <td>
     <form method="post" class="delete_form" action="<?php echo e(action('CategoryController@destroy', $row['id'])); ?>">
      <?php echo e(csrf_field()); ?>

      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/category/index.blade.php ENDPATH**/ ?>