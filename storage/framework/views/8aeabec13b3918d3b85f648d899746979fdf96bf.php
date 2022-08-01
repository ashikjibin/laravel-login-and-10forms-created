<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Data</h1>
    <a href="<?php echo e(route('datas.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

        <div class="row">
        <div class="form-group col-md">
            <th>Employer name</th>
            <th>Supervisor name</th>
            <th>email</th>
            <th>phone</th>
            <th>Job Title</th>
            <th>Duty and Responsibility</th>
                        
        </div>
    
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <td><?php echo e($data->ename); ?></td>
            <td><?php echo e($data->sname); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->phone); ?></td>
            <td><?php echo e($data->jobtitle); ?></td>
            <td><?php echo e($data->duty); ?></td>
            
            
           
            <td>
                    <form action="<?php echo e(route('datas.destroy',$data->id)); ?>" method="Post">
                    <a class="btn btn-success" href="<?php echo e(route('datas.show',$data->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('datas.edit',$data->id)); ?>">Edit</a>
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