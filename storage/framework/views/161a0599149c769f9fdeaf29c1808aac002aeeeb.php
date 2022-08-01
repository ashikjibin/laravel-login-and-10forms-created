<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Form</h1>
    <a href="<?php echo e(route('forms.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table width='80%' border=0>
        <tr>
            <th>studentname</th>
            <th>studentemail</th>
            <th>studentmobile</th>
            <th>studentaddress</th>
            <th>studentage</th>
            <th>studentpassword</th>
        </tr>
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($form->studentname); ?></td>
            <td><?php echo e($form->studentemail); ?></td>
            <td><?php echo e($form->studentmobile); ?></td>
            <td><?php echo e($form->studentaddress); ?></td>
            <td><?php echo e($form->studentage); ?></td>
            <td><?php echo e($form->studentpassword); ?></td>
            <td>
                    <form action="<?php echo e(route('forms.destroy',$form->id)); ?>" method="Post">
                    <a href="<?php echo e(route('forms.show',$form->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('forms.edit',$form->id)); ?>">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>