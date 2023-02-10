

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="<?php echo e(url('insert-product')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">select category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" value="1" min="1" name="price" id="price" required>
                </div>
                <div class="col-md-6">
                    <label for="name">Quantity</label>
                    <input class="form-control" type="number" value="1" min="1" name="quantity" id="quantity" required>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/product/add.blade.php ENDPATH**/ ?>