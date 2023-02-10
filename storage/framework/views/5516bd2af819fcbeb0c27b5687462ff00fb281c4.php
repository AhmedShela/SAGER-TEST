

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <div class="">
            <h1>Products Page</h1>
            <i class="bi bi-pen"></i>
            <a class="btn btn-primary" href="<?php echo e(url('add-product')); ?>">Add Product</a>
        </div>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Updaet Time</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->category->name); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->description); ?></td>
                    <td><?php echo e($item->price); ?></td>
                    <td><?php echo e($item->quantity); ?></td>
                    <td><?php echo e($item->updated_at); ?></td>
                    <td><img src="<?php echo e(asset('assets/uploads/products/'.$item->image)); ?>" width="50px" class="product-image" alt=""></td>
                    <td><a class="btn btn-primary" href="<?php echo e(url('reduce-product-qty/'.$item->id)); ?>">Reduce Quantity</a></td>
                    <td>
                        <a href="<?php echo e(url('edit-product/'.$item->id)); ?>">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="<?php echo e(url('delete-product/'.$item->id)); ?>" onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash" style="color: red;"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/product/index.blade.php ENDPATH**/ ?>