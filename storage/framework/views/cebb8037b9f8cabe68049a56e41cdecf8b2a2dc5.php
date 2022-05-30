<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">     
        <!-- <a style="float:right;margin-top:10px;" href="<?php echo e(route('student.create')); ?>" class="btn btn-primary">Add</a> -->
        
        <br />
        <h3 aling="center">Edit Student</h3>
        <form action="<?php echo e(action('StudentController@update',$id)); ?>" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="PATCH" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" value="<?php echo e($student->first_name); ?>" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name" value="<?php echo e($student->last_name); ?>" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>