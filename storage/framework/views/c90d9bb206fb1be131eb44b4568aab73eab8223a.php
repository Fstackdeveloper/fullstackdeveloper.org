<?php $__env->startSection('title', 'New Project'); ?>


<?php $__env->startSection('PagePluginsStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/clockface/css/clockface.css')); ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" type="text/css" />


<link href="<?php echo e(URL::asset('assets/global/plugins/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PagePluginsScripts'); ?>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/moment.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/clockface/js/clockface.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/tinymce/tinymce.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')); ?>"type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PageScripts'); ?>
        <script>
			
			
			
       tinymce.init({
    selector: "textarea.tinymce",
    themes: "modern"
             });

			
			
var ComponentsBootstrapSelect = function () {

    var handleBootstrapSelect = function() {
        $('.bs-select').selectpicker({
            iconBase: 'fa',
            tickIcon: 'fa-check'
        });
    }

    return {
        //main function to initiate the module
        init: function () {      
            handleBootstrapSelect();
        }
    };

}();

if (App.isAngularJsApp() === false) {
    jQuery(document).ready(function() {    
        ComponentsBootstrapSelect.init(); 
    });
}
			
        </script>
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
                                    <span>New Project</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        
                                                
                        
                        <!-- END PAGE HEADER-->

						
                       
                       
                       
                       
                       
      <h1 class="page-title">Projects</h1>                  

                    
                    
    <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">New</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="<?php echo e(route('project.store')); ?>" class="form-horizontal form-bordered"    method="post" enctype="multipart/form-data" >
                                            <div class="form-body">
                                            
                                            
                                        
                                          
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Title</label>
                                                <div class="col-md-9">
                                                    <input name="project[title]" id="title" type="text" class="form-control input-circle" placeholder="Project Title" required autofocus> </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="control-label col-md-3">Description</label>
                                                <div class="col-md-9">
                                                <textarea name="project[description]" id="description" class="tinymce"></textarea> </div>
                                             </div>
                                            
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Release Date</label>
                                                <div class="col-md-9">  
                                                
                                                 <div class="input-group">
                                                  <input name="project[release_date]" id="release_date"  class="form-control" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
													</div>
                                                   
                                                

                                                 
                                                  </div>
                                            </div>
                                            
                                           
                                                                                             
                                               <div class="form-group ">
                                                    <label class="control-label col-md-3">Featured Photo</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                            
                                                            </div>
                                                            <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="project[image]" id="your_photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                </div>
                                                               </div>
                                                                
                                                                                                                          
                                                                                              
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Project URL</label>
                                                <div class="col-md-9">
                                                    <input name="project[url]" id="url" type="text" class="form-control input-circle" placeholder="Example: https://www.fullstackdeveloper.org" required> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Client</label>
                                                <div class="col-md-9">
                                                   
                                                          <select name="project[project_clients_id]" id="project_clients_id"  class="bs-select form-control" required>
                                                           <option>SELECT CLIENT</option>
                                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($client->id); ?>"> <?php echo e($client->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      	  </select>
											 </div>
                                            </div>
                                                                                             
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Category</label>
                                                <div class="col-md-9">
                                                   
                                                          <select name="project[project_categories_id]" id="project_categories_id"  class="bs-select form-control" required>
                                                           <option>SELECT CATEGORY</option>
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->id); ?>"> <?php echo e($category->title); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
											 </div>
                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                                  
                                       
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                            <!-- END SAMPLE FORM PORTLET-->
											</div>
						</div>
                     
                      
                        </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>