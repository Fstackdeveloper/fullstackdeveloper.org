<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
    <?php echo $__env->make('admin.commons.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    </head>

<body class="page-header-fixed page-sidebar-fixed  page-sidebar-closed-hide-logo page-content-white"> 
<div class="page-wrapper">   
<?php echo $__env->make('admin.commons.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
      <!-- BEGIN CONTAINER -->
 <div class="page-container">
<?php echo $__env->make('admin.commons.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php echo $__env->yieldContent('content'); ?>
	</div>
<?php echo $__env->make('admin.commons.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
	</div> 
	
<?php echo $__env->make('admin.commons.scriptFooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
          
</body>
</html>
