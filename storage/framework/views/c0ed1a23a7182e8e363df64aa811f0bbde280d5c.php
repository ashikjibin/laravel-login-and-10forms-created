<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>

    <div>
    <a href="<?php echo e(route('informs.index')); ?>">back</a><br/><br/>
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
   
    <form action="<?php echo e(route('informs.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        
            <div class="row">
                <div class="form-group">
                <td>name</td>
                <td><input type="text" name="name" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>email</td>
                <td><input type="text" name="email" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>address</td>
                <td><input type="text" name="address" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>city</td>
                <td><input type="text" name="city" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>state</td>
                <td><input type="text" name="state" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>country</td>
                <td><input type="text" name="country" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>zipcode</td>
                <td><input type="text" name="zipcode" class="form-control"></td>
                </div>

                <div class="form-group">
                <td>mobile</td>
                <td><input type="text" name="mobile" class="form-control"></td>
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