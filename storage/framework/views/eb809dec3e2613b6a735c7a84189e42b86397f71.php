<?php $__env->startSection('content'); ?>
    <h3>Products</h3>

<ul>
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li>
        <h4> Name of product:<?php echo e($product->name); ?> </h4>
        <h4>Category:<?php echo e(count($product->category)?$product->category->name:"N/A"); ?></h4>
        <form action="<?php echo e(route('product.destroy',$product->id)); ?>"  method="POST">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('DELETE')); ?>

          <input class="btn btn-sm btn-danger" type="submit" value="Delete">
        </form>

      </li>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

          <h3> No products</h3>

    <?php endif; ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>