<?php $__env->startSection('content'); ?>

    <tr>
        
        <h2> Show Post</h2>
        <a href="<?php echo e(route('posts.index')); ?>"> Back</a><br>      
        
        <td><strong>Title:</strong>
                <?php echo e($post->title); ?>

        </td><br>
        
        <td><strong>Description:</strong>
                <?php echo e($post->description); ?>

        </td>
   </tr>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>