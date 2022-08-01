<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="<?php echo e(route('forms.index')); ?>">back</a><br/><br/>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
    <form action="<?php echo e(route('forms.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        <table width="25%" border="0">

            <tr>
                <td>studentname</td>
                <td><input type="text" name="studentname"></td>
            </tr>
            <tr>
                <td>studentemail</td>
                <td><input type="text" name="studentemail"></td>
            </tr>
            <tr>
                <td>studentmobile</td>
                <td><input type="text" name="studentmobile"></td>
            </tr>
            <tr>
                <td>studentaddress</td>
                <td><input type="text" name="studentaddress"></td>
            </tr>
            <tr>
                <td>studentage</td>
                <td><input type="text" name="studentage"></td>
            </tr>
            
            <tr>
                <td>studentpassword</td>
                <td><input type="text" name="studentpassword"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>
            </tr>
         </table>

    </form>
   
  </body>
  </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>