
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
   <meta charset="utf-8">

   <title>School</title>

   <!-- Styles -->
   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/dynamicfooter.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(url('collagenaver.css')); ?>">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>







</head>

<body>
   <div id="app">

      <!-- Navbar -->
      <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Hero -->
      

      <div class="container">


         <div class="row">
               <!-- Main Content -->
               <?php echo $__env->yieldContent('content'); ?>
         

         </div>

      </div>

   </div>

   <!-- Footer -->

   <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- Scripts -->
   <script src="<?php echo e(asset('js/app.js')); ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/includes/layout.blade.php ENDPATH**/ ?>