<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
        <h1>Datas</h1>
    <a href="<?php echo e(route('datas.index')); ?>">back</a><br/><br/>
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
   
    <form action="<?php echo e(route('datas.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        
            <div class="row">
                <div class="form-group">
                <td>Employer name</td>
                <td><input type="text" name="ename" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Supervisor name</td>
                <td><input type="text" name="sname" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>email</td>
                <td><input type="text" name="email" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Phone</td>
                <td><input type="text" name="phone" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Job Title</td>
                <td><input type="text" name="jobtitle" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>Duty and Responsibility</td>
                <td><input type="text" name="duty" class="form-control"></td>
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