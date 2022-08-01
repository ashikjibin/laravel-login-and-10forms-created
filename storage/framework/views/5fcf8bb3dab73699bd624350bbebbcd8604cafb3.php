<?php $__env->startSection('content'); ?>


 <html>
  <head>
    <title> Add Data</title>
  </head>
  <body>
  
    <a href="<?php echo e(route('products.index')); ?>">back</a><br/><br/>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
    <form action="<?php echo e(route('products.store')); ?>" method="POST" name="form1">
        <?php echo csrf_field(); ?>

        <table width="25%" border="0">

            <tr>
                <td>title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>product name</td>
                <td><input type="text" name="pname"></td>
            </tr>
            <tr>
                <td>product price</td>
                <td><input type="text" name="pprice"></td>
            </tr>
            <tr>
                <td>product quality</td>
                <td><input type="text" name="pquality"></td>
            </tr>
            <tr>
                <td>product size</td>
                <td><input type="text" name="psize"></td>
            </tr>
            
            <tr>
                <td>product brand</td>
                <td><input type="text" name="pbrand"></td>
            </tr>
            <tr>
                <td>product discount</td>
                <td><input type="text" name="pdiscount"></td>
            </tr>
            
            <tr>
                <td>product description</td>
                <td><input type="text" name="description"></td>
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