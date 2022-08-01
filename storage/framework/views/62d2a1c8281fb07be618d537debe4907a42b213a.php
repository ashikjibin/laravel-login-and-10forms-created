<?php $__env->startSection('content'); ?>


        
        <h2> Show Post</h2>
        <a href="<?php echo e(route('projects.index')); ?>"> Back</a><br>      
    <div class="row">
    <div class="form-group">   
        <td><strong>name:</strong>
                <?php echo e($project->name); ?>

        </td><br>
    </div>
    <div class="form-group">
        <td><strong>email:</strong>
                <?php echo e($project->email); ?>

        </td>
    </div>
    <div class="form-group">
        <td><strong>mobile:</strong>
                <?php echo e($project->mobile); ?>

        </td><br>
    </div>
    <div class="form-group">
        <td><strong>address:</strong>
                <?php echo e($project->address); ?>

        </td>
    </div>
    <div class="form-group">
        <td><strong>age:</strong>
                <?php echo e($project->age); ?>

        </td><br>
    </div>
    <div class="form-group">
        <td><strong>password:</strong>
                <?php echo e($project->password); ?>

        </td>
   </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>