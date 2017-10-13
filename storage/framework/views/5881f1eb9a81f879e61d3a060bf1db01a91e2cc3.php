<?php $__env->startSection('title', 'Messages'); ?>


<?php $__env->startSection('PagePluginsStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/plugins/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PagePluginsScripts'); ?>
<script src="<?php echo e(URL::asset('assets/global/scripts/datatable.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/datatables/datatables.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PageScripts'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        
                        
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo e(route('adminHome')); ?>">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('message')); ?>">Messages</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                	<span><?php echo e($message->name); ?></span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        
                                                
                        
                        <!-- END PAGE HEADER-->

						
                       
                       
                       
                       
                       
    
                                    
                                    
                    
                    
    <div class="row">
   <div class="col-md-12">
                             
                             
                             
                            <div class="portlet ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-shopping-cart"></i>Message</div>
                                        
                                    </div>
 <div class="portlet-body">  

                                
 <div class="col-md-12">
  							<div class="col-md-1">
  								Name
  							</div>
  							
  							<div class="col-md-11">
  								<?php echo e($message->name); ?>

  							</div>
   							
	 </div>                               

   							
 <div class="col-md-12">
  							<div class="col-md-1">
  								Phone
  							</div>
  							
  							<div class="col-md-11">
  								<?php echo e($message->phone); ?>

  							</div>
   							
	 </div>                               

 <div class="col-md-12">
  							<div class="col-md-1">
  								Email
  							</div>
  							
  							<div class="col-md-11">
  								<?php echo e($message->email); ?>

  							</div>
   							
	 </div>    
 							
 							

 <div class="col-md-12">
  							<div class="col-md-1">
  								Message
  							</div>
  							
  							<div class="col-md-11">
  								<?php echo e($message->message); ?>

  							</div>
   							
	 </div>    
  					
  							
   							
   							
 </div>                                                                                                                      <!-- END portlet-body -->
	   							</div>                                   
                                 <!-- END portlet -->                                                                                                                                                                                                                                  
                                                                                                                    
                                                                                                                                                                              
                             
											</div>
						</div>
                     
                      
                        </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>