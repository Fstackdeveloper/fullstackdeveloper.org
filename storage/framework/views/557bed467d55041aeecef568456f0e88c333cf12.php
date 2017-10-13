<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php $__env->startSection('GlobalStyles'); ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php echo $__env->yieldSection(); ?>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo $__env->yieldContent('PagePluginsStyles'); ?>
<!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN THEME GLOBAL STYLES -->
<?php $__env->startSection('ThemeGlobalStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/css/components-rounded.min.css')); ?>" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php echo $__env->yieldSection(); ?>
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<?php echo $__env->yieldContent('PageStyles'); ?>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<?php $__env->startSection('ThemeLayoutStyles'); ?>
<link href="<?php echo e(URL::asset('assets/layouts/layout/css/layout.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/layouts/layout/css/themes/light.min.css')); ?>" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo e(URL::asset('assets/layouts/layout/css/custom.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php echo $__env->yieldSection(); ?>
<!-- END THEME LAYOUT STYLES -->



