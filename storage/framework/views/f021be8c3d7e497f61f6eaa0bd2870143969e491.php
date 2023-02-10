

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="<?php echo e(url('update-product/'.$product->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-control" name="category_id" id="category_id">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->id == $product->category->id): ?>
                            <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="<?php echo e($product->name); ?>" class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description"><?php echo e($product->description); ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="price">Price</label>
                    <input value="<?php echo e($product->price); ?>" class="form-control" type="number" value="1" min="1" name="price" id="price" required>
                </div>
                <div class="col-md-6">
                    <label for="name">Quantity</label>
                    <input value="<?php echo e($product->quantity); ?>" class="form-control" type="number" value="1" min="1" name="quantity" id="quantity" required>
                </div>
                <?php if($product->image): ?>
                <div class="mt-5"></div>
                <img width="50px" src="<?php echo e(asset('assets/uploads/products/'.$product->image)); ?>" style="width: 200px;" alt="">
                <?php endif; ?>
                <div class="col-md-6 mt-2">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\ahmad\wms\resources\views/product/edit.blade.php ENDPATH**/ ?>