<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center">Add Data</h3>
        <form action="<?php echo e(url('student')); ?>" method="post">
            <div class="form-group">
            <?php if(\Session::has('success')): ?>
               <div class="alert alert-success"><p><?php echo e(\Session::get('success')); ?></p></div>
            <?php endif; ?>
            
            </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
                <?php if($errors->has('first_name')): ?>
                    <div class="text-danger"><?php echo e($errors->first('first_name')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
                <?php if($errors->has('last_name')): ?>
                    <div class="text-danger"><?php echo e($errors->first('last_name')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>