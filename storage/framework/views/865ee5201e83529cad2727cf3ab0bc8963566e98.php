<section >
        <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?>


                </div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('You are logged in!')); ?>

                    </div>
        </div>

            <div class="list-group">
                           
                   <!-- <a class="list-group-item list-group-item-action" href="<?php echo e(route('post.create')); ?>">CreatePost</a>-->
                    <a class="list-group-item list-group-item-action" href="<?php echo e(route('posts')); ?>">Create Blog Post</a>

                    <a class="list-group-item list-group-item-action" href="<?php echo e(url('category')); ?>">CreateCategory</a>

                      <a class="list-group-item list-group-item-action" href="<?php echo e(url('products')); ?>">BookAdd</a>

                    <!--<a class="list-group-item list-group-item-action" href="<?php echo e(route('book.create')); ?>">AddBook</a>-->
                    <a class="list-group-item list-group-item-action" href="<?php echo e(route('contact.index')); ?>">ContactMeaasge</a>
                

                                    <a class="list-group-item list-group-item-action" class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                               
            </div>
</section>

<?php /**PATH C:\xampp\htdocs\Laravel\school\resources\views/post/sidenav.blade.php ENDPATH**/ ?>