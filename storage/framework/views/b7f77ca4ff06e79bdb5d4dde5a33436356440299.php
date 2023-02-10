

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-head">
        <h1>Category Page</h1>
        <a class="btn btn-primary" href="<?php echo e(url('add-category')); ?>">Add Category</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number Of Products</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->products_count); ?></td>
                    <td>
                        <a href="<?php echo e(url('edit-category/'.$item->id)); ?>">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="<?php echo e(url('delete-category/'.$item->id)); ?>" onclick="return confirm('Are you sure?')">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/category/index.blade.php ENDPATH**/ ?>