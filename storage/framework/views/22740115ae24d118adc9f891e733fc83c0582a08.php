<?php $__env->startSection('content'); ?>

    <tr>
        
        <h2> Show Post</h2>
        <a href="<?php echo e(route('forms.index')); ?>"> Back</a><br>      
        
        <td><strong>name:</strong>
                <?php echo e($form->name); ?>

        </td><br>
        
        <td><strong>email:</strong>
                <?php echo e($form->email); ?>

        </td>
        <td><strong>mobile:</strong>
                <?php echo e($form->mobile); ?>

        </td><br>
        
        <td><strong>address:</strong>
                <?php echo e($form->address); ?>

        </td>
        <td><strong>age:</strong>
                <?php echo e($form->age); ?>

        </td><br>
        
        <td><strong>password:</strong>
                <?php echo e($form->password); ?>

        </td>
   </tr>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>