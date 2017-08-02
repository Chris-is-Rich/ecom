<?php $__env->startSection('title','shirt'); ?>
<?php $__env->startSection('content'); ?>
        <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                          <img src="<?php echo e(url('images',$shirts[0]->image)); ?>"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">$<?php echo e($shirts[0]->price); ?></span> <?php echo e($shirts[0]->name); ?>

                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>

                                </select>
                            </label>
                            <a href="<?php echo e(route('cart.addItem',$shirts[0]->id)); ?>" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                <p class="text-left subheader"><small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small></p>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>