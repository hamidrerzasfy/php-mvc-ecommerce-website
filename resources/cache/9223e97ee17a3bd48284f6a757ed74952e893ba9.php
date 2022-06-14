<?php $__env->startSection('title', 'Add Slide'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-center mt-2">Add Slide</h1>
    <div class="container mt-5">
        <div class="col-12 col-md-8 col-lg-6 mb-5 mx-auto">
            <?php echo $__env->make('admin.layouts.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <form action="/admin/slider/store/" method="post" enctype="multipart/form-data">
                <input type="hidden" name="csrf" value="<?php echo e(\App\Core\CSRFToken::_token()); ?>">

                <label for="link">link:</label>
                <input type="text" name="link" class="form-control mb-3">

                <label for="image">Image:</label>
                <input type="file" name="image_path" class="form-control mb-3">

                <input type="submit" value="Add" class="btn btn-success ">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>