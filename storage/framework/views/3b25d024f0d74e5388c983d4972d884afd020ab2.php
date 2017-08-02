<?php $__env->startSection('content'); ?>
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
               Welcome to Good Equity Supply Store
            </strong>
        </h2>
        <br>
        <a href="<?php echo e(url('/shirts')); ?>">
            <button class="button large">Check out Products</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $shirts->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                      <a href="<?php echo e(route('cart.addItem',$shirt->id)); ?>" class="button expanded add-to-cart">
                          Add to Cart
                      </a>
                        <a href="#">
                            <img src="<?php echo e(url('images',$shirt->image)); ?>"/>
                        </a>
                    </div>
                    <a href="<?php echo e(route('shirt')); ?>">
                        <h3>
                            <?php echo e($shirt->name); ?>

                        </h3>
                    </a>
                    <h5>
                        $<?php echo e($shirt->price); ?>


                    </h5>
                    <p>
                        <?php echo e($shirt->description); ?>

                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>No shirts</h3>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>