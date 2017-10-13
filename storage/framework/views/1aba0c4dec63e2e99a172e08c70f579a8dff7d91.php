<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.blocks.aboutMeShort', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    <?php echo $__env->make('frontend.blocks.portfolio', array('Pagination'=>false), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.blocks.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    <?php echo $__env->make('frontend.blocks.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
    <?php echo $__env->make('frontend.toggle.modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>