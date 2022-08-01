<?php $__env->startSection('content'); ?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>
    <h1>Products</h1>
    <a href="<?php echo e(route('products.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table width='80%' border=0>
        <tr>
            <th>title</th>
            <th>pname</th>
            <th>pprice</th>
            <th>pquality</th>
            <th>psize</th>
            <th>pbrand</th>
            <th>pdiscount</th>
            <th>description</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->title); ?></td>
            <td><?php echo e($product->pname); ?></td>
            <td><?php echo e($product->pprice); ?></td>
            <td><?php echo e($product->pquality); ?></td>
            
            <td><?php echo e($product->psize); ?></td>
            <td><?php echo e($product->pbrand); ?></td>
            <td><?php echo e($product->pdiscount); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td>
                    <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="Post">
                    <a href="<?php echo e(route('products.show',$product->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>