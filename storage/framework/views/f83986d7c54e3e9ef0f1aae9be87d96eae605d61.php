<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
        <h1>News</h1>
    <a href="<?php echo e(route('cruds.index')); ?>">back</a><br/><br/>
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
   
    <form action="<?php echo e(route('cruds.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        
            <div class="row">
                <div class="form-group">
                <td>index</td>
                <td><input type="text" name="index" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>headline</td>
                <td><input type="text" name="headline" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>topics</td>
                <td><input type="text" name="topics" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>description</td>
                <td><input type="text" name="description" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>comments</td>
                <td><input type="text" name="comments" class="form-control"></td>
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