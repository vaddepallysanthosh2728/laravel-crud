<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">     
        <a style="float:right;margin-top:10px;" href="<?php echo e(route('student.create')); ?>" class="btn btn-primary">Add</a>
        <br />
        <h3 aling="center">All Students</h3>
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success"><?php echo e(\Session::get('success')); ?></div>
        <?php endif; ?>
        <?php if(\Session::has('failed')): ?>
            <div class="alert alert-danger"><?php echo e(\Session::get('failed')); ?></div>
        <?php endif; ?>
        <?php if(\Session::has('deleted')): ?>
            <div class="alert alert-success"><?php echo e(\Session::get('deleted')); ?></div>
        <?php endif; ?>
        <table class="table table-striped">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td style="text-align:center" colspan="2">Actions</td>
            </tr>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($s['first_name']); ?></td>
            <td><?php echo e($s['last_name']); ?></td>
            <td style="float:right">
                <a href="<?php echo e(action('StudentController@edit',$s['id'])); ?>" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
            <form action="<?php echo e(action('StudentController@deleteStudent',$s['id'])); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>