

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body">
        <form action="<?php echo e(url('update-category/'.$cat->id)); ?>" method="post">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="<?php echo e($cat->name); ?>" class="form-control" type="text" name="name" id="name">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/category/edit.blade.php ENDPATH**/ ?>