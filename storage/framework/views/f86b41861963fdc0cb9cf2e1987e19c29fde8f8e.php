

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Edit User</h4>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
    <div class="card-body">
        <form id="addUserForm" action="<?php echo e(url('update-user/'.$user->id)); ?>" method="post">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="<?php echo e($user->name); ?>" class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input value="<?php echo e($user->email); ?>" class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input value="<?php echo e($user->password); ?>" class="form-control" type="text" name="password" id="password" required>
                    <p id="message" style="color: red;font-size: 14px;"></p>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/user/edit.blade.php ENDPATH**/ ?>