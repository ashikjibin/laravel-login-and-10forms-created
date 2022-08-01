<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Projects</h1>
    <div class="container">
                <div class="">
                    <div class="card-header">Project</div>
                    <div class="card-body">
    <a href="<?php echo e(route('projects.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

        <div class="row">
        <div class="form-group">
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>zipcode</th>
            <th>mobile</th>
            
        </div>
    
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group">
            <td><?php echo e($project->projectname); ?></td>
            <td><?php echo e($project->phone); ?></td>
            <td><?php echo e($project->date); ?></td>
            <td><?php echo e($project->fullname); ?></td>
            <td><?php echo e($project->company); ?></td>
            <td><?php echo e($project->signature); ?></td>
            
           
            <td>
                    <form action="<?php echo e(route('projects.destroy',$project->id)); ?>" method="Post">
                    <a class="btn btn-success" href="<?php echo e(route('projects.show',$project->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('projects.edit',$project->id)); ?>">Edit</a>
                    <!-- @csrf
                    @method('DELETE') -->
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
    </table>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>