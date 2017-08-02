<?php $__env->startSection('content'); ?>

    <div class="row">
        <h3>Cart Items</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>size</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cartItem->name); ?></td>
                    <td><?php echo e($cartItem->price); ?></td>
                    <td width="50px">
                        <?php echo Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']); ?>

                        <input name="qty" type="text" value="<?php echo e($cartItem->qty); ?>">


                    </td>
                    <td>
                        <div > <?php echo Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ); ?>

                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        <?php echo Form::close(); ?>


                        <form action="<?php echo e(route('cart.destroy',$cartItem->rowId)); ?>"  method="POST">
                           <?php echo e(csrf_field()); ?>

                           <?php echo e(method_field('DELETE')); ?>

                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td></td>
                <td>
                    Tax: $<?php echo e(Cart::tax()); ?> <br>
                    Sub Total: $ <?php echo e(Cart::subtotal()); ?> <br>
                    Grand Total: $ <?php echo e(Cart::total()); ?>

                </td>
                <td>Items: <?php echo e(Cart::count()); ?>


                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>
        <a href="<?php echo e(url('/checkout')); ?>" class="button">Check Out</a>

    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>