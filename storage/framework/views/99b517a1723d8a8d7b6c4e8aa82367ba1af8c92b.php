        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="<?php echo e(URL::asset('assets/global/plugins/respond.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/excanvas.min.js')); ?>"></script> 
<script src="<?php echo e(URL::asset('assets/global/plugins/ie8.fix.min.js')); ?>"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <?php $__env->startSection('CorePlugins'); ?>
        <script src="<?php echo e(URL::asset('assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
        <?php echo $__env->yieldSection(); ?>
        <!-- END CORE PLUGINS -->
        
         <!-- BEGIN PAGE LEVEL PLUGINS -->     
         <?php echo $__env->yieldContent('PagePluginsScripts'); ?>
		 <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <?php $__env->startSection('ThemeGlobalScripts'); ?>
        <script src="<?php echo e(URL::asset('assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
        <?php echo $__env->yieldSection(); ?>
        <!-- END THEME GLOBAL SCRIPTS -->
            
		<!-- BEGIN PAGE LEVEL SCRIPTS -->	
     	<?php echo $__env->yieldContent('PageScripts'); ?>
        <!-- END PAGE LEVEL SCRIPTS -->
       
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <?php $__env->startSection('LayoutScripts'); ?>
        <script src="<?php echo e(URL::asset('assets/layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/layouts/layout/scripts/demo.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(URL::asset('assets/layouts/global/scripts/quick-nav.min.js')); ?>" type="text/javascript"></script>
        <?php echo $__env->yieldSection(); ?>
        <!-- END THEME LAYOUT SCRIPTS -->
               

       
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
