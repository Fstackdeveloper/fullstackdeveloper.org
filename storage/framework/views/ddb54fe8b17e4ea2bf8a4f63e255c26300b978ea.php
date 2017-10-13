<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
    <?php echo $__env->make('frontend.commons.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    </head>

<body  class="index" id="page-top" >    
<?php echo $__env->make('frontend.commons.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.commons.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
          
</body>
</html>
