<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  <h1>Customer</h1>
    <a href="<?php echo e(route('customers.index')); ?>">back</a><br/><br/>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
    <form action="<?php echo e(route('customers.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        <table width="25%" border="0">

            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>purchasedata</td>
                <td><input type="text" name="purchasedata"></td>
            </tr>
            
            <tr>
                <td>serialnumber</td>
                <td><input type="text" name="serialnumber"></td>
            </tr>
            
            <tr>
                <td>purchaseplace</td>
                <td><input type="text" name="purchaseplace"></td>
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