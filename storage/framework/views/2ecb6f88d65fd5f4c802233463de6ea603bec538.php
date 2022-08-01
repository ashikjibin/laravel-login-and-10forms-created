<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Post</h1>
    <a href="<?php echo e(route('posts.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table width='80%' border=0>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>mobile</th>
            <th>address</th>
            <th>age</th>
            <th>password</th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($post->name); ?></td>
            <td><?php echo e($post->email); ?></td>
            <td><?php echo e($post->mobile); ?></td>
            <td><?php echo e($post->address); ?></td>
            <td><?php echo e($post->age); ?></td>
            <td><?php echo e($post->password); ?></td>
            <td>
                    <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="Post">
                    <a href="<?php echo e(route('posts.show',$post->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('posts.edit',$post->id)); ?>">Edit</a>
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