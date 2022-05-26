<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">     
        <a style="float:right;margin-top:10px;" href="<?php echo e(route('student.create')); ?>" class="btn btn-primary">Add</a>
        
        <br />
        <h3 aling="center">All Students</h3>
        <table class="table table-striped">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td style="text-align:center">Actions</td>
            </tr>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($s['first_name']); ?></td>
            <td><?php echo e($s['last_name']); ?></td>
            <td style="float:right">
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>