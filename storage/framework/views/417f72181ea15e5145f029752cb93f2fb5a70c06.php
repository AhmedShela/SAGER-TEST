

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Add User</h4>
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
        <form id="addUserForm" action="<?php echo e(url('insert-user')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="password" required>
                    <p id="message" style="color: red;font-size: 14px;"></p>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // function checkPassword(str) {
    //     var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    //     return re.test(str);
    // }
    // document.getElementById("addUserForm").addEventListener('submit', function (e) {
    //     if (checkPassword(document.getElementById("password").value) == false) {
    //         document.getElementById("message").innerHTML = "password must be 8 characters and contains number 1-9 and A-Z litters"
    //         e.preventDefault();
    //         return false
    //     }
    // })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/user/add.blade.php ENDPATH**/ ?>