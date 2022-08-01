<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Cruds</h1>
    <a href="<?php echo e(route('cruds.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

        <div class="row">
        <div class="form-group">
            <th>index</th>
            <th>headline</th>
            <th>topics</th>
            <th>description</th>
            <th>comments</th>
            
        </div>
    </div>
        <?php $__currentLoopData = $cruds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <td><?php echo e($crud->index); ?></td>
            <td><?php echo e($crud->headline); ?></td>
            <td><?php echo e($crud->topics); ?></td>
            <td><?php echo e($crud->description); ?></td>
            <td><?php echo e($crud->comments); ?></td>
           
            <td>
                    <form action="<?php echo e(route('cruds.destroy',$crud->id)); ?>" method="Post">
                    <a class="btn btn-success" href="<?php echo e(route('cruds.show',$crud->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('cruds.edit',$crud->id)); ?>">Edit</a>
                    <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>