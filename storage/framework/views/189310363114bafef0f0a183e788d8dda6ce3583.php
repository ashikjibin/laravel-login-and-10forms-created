<?php $__env->startSection('content'); ?>
<html>
<head>  
    <title>Homepage</title>
</head>

<body>
<h1>Customer</h1>
    <a href="<?php echo e(route('customers.create')); ?>">Add New Data</a><br/><br/>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table width='80%' border=0>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>mobile</th>
            <th>address</th>
            <th>purchasedata</th>
            <th>serialnumber</th>
            <th>purchaseplace</th>
        </tr>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer->name); ?></td>
            <td><?php echo e($customer->email); ?></td>
            <td><?php echo e($customer->mobile); ?></td>
            <td><?php echo e($customer->address); ?></td>
            <td><?php echo e($customer->purchasedata); ?></td>
            <td><?php echo e($customer->serialnumber); ?></td>
            <td><?php echo e($customer->purchaseplace); ?></td>
            <td>
                    <form action="<?php echo e(route('customers.destroy',$customer->id)); ?>" method="Post">
                    <a href="<?php echo e(route('customers.show',$customer->id)); ?>">  Show </a>
                    <a class="btn btn-primary" href="<?php echo e(route('customers.edit',$customer->id)); ?>">Edit</a>
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