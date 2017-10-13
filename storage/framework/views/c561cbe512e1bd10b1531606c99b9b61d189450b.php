<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
    <?php echo $__env->make('admin.commons.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    </head>

<body class=" login"> 

 <!-- BEGIN LOGO -->
 <div class="logo">
<a href="/admin/">
 <img src="<?php echo e(URL::asset('images/logo-big.png')); ?>" alt="" /> </a>
 </div>
<!-- END LOGO -->

<div class="content">

<?php echo $__env->yieldContent('content'); ?>

</div>
	
<?php echo $__env->make('admin.commons.scriptFooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
          
</body>
</html>
