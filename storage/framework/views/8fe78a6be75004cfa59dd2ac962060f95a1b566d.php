 <html>
  <head>
    <title> Add Data</title>
  </head>

<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
  <body>
  
    <a href="">Home</a><br/><br/>

    <form action="" method="POST" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="submit" value="Add"></td>
            </tr>
         </table>

    </form>
   
  </body>
  </html>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>