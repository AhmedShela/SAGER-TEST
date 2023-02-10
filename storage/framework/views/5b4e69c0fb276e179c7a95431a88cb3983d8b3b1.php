

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-head">
        <h1>Users Page</h1>
        <a class="btn btn-primary" href="<?php echo e(url('add-user')); ?>">Add User</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td>
                        <a href="<?php echo e(url('edit-user/'.$item->id)); ?>">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="<?php echo e(url('delete-user/'.$item->id)); ?>" onclick="return confirm('Are you sure?')">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/user/index.blade.php ENDPATH**/ ?>