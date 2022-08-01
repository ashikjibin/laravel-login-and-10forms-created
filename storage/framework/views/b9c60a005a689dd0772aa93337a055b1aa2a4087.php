<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
    <a href="<?php echo e(route('projects.index')); ?>">back</a><br/><br/>
    </div>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
    <form action="<?php echo e(route('projects.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        
            <div class="row">
                <div class="form-group">
                <td>Project name</td>
                <td><input type="text" name="projectname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>phone</td>
                <td><input type="text" name="phone" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>date</td>
                <td><input type="date" name="date" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Full name</td>
                <td><input type="text" name="fullname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>company</td>
                <td><input type="text" name="company" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>signature</td>
                <td><input type="text" name="signature" class="form-control"></td>
                </div>

                
            <div class="form-group">         
                <td></td>
                <td><input type="Submit" name="submit" class="btn btn-danger"></td>
            </div>
         

    </form>
   
  </body>
  </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>