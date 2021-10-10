

<?php $__env->startSection('content'); ?>

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Contact Message</h3>
  <br />
  <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
   <p><?php echo e($message); ?></p>
  </div>
  <?php endif; ?>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Location</th>
    <th>Delete</th>
   </tr>
   <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
    <td><?php echo e($row['name']); ?></td>
    <td><?php echo e($row['email']); ?></td>
     <td><?php echo e($row['subject']); ?></td>
    <td><?php echo e($row['message']); ?></td>
    <td><?php echo e($row['location']); ?></td>
    <td>
     <form method="post" class="delete_form" action="<?php echo e(action('ContactController@destroy', $row['id'])); ?>">
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




<?php echo $__env->make('layouts.appLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/contact/index.blade.php ENDPATH**/ ?>