<?php $__env->startSection('title', 'Settings'); ?>


<?php $__env->startSection('PagePluginsStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/morris/morris.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PagePluginsScripts'); ?>
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
                                    <span>Setting</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        
                                                
                        
                        <!-- END PAGE HEADER-->

						
                       
                       
                       
                       
                       

                    
                    
    <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light form-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">Settings</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form action="<?php echo e(route('adminSettingUpdate')); ?>" class="form-horizontal form-bordered"    method="post" enctype="multipart/form-data" >
                                            <div class="form-body">
                                            
                                            
                                        
                                          
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Website Name</label>
                                                <div class="col-md-9">
                                                    <input name="settings[website_title]" id="website_title" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['website_title']); ?>" value="<?php echo e($settings['website_title']); ?> "> </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="control-label col-md-3">Website Description</label>
                                                <div class="col-md-9">
                                                <textarea name="settings[website_desc]" id="website_desc" class="form-control" rows="3"><?php echo e($settings['website_desc']); ?></textarea> </div>
                                             </div>
                                            
                                           <div class="form-group">
                                                <label class="control-label col-md-3">Your Name</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_name]" id="your_name" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_name']); ?>" value="<?php echo e($settings['your_name']); ?> "> </div>
                                            </div>
                                            
                                           
                                                                                             
                                               <div class="form-group ">
                                                    <label class="control-label col-md-3">Your Photo</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                            <img  src="<?php echo e(Storage::url($settings['your_photo'],'public')); ?>" >
                                                            </div>
                                                            <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="settings[your_photo]" id="your_photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                </div>
                                                                
                                                                                                                          
                                                                                              
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Your Email Address</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_email]" id="your_email" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_email']); ?>" value="<?php echo e($settings['your_email']); ?> "> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Your Skille (brief)</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_skills_short]" id="your_skills_short" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_skills_short']); ?>" value="<?php echo e($settings['your_skills_short']); ?> "> </div>
                                            </div>
                                                                                             
                                            <div class="form-group">
                                          <label class="control-label col-md-3">About You (First Column)</label>
                                                <div class="col-md-9">
                                                   <textarea name="settings[about_you_column_one]" id="about_you_column_one" class="tinymce"><?php echo e($settings['about_you_column_one']); ?></textarea></div>
                                            </div>
                                            
                                           <div class="form-group">
                                          <label class="control-label col-md-3">About You (Second Column)</label>
                                                <div class="col-md-9">
                                                   <textarea name="settings[about_you_column_two]" id="about_you_column_two" class="tinymce"><?php echo e($settings['about_you_column_two']); ?></textarea></div>
                                            </div>
                                                                                       
                                                                                                          
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Your Location</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_location]" id="your_location" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_location']); ?>" value="<?php echo e($settings['your_location']); ?> "> </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="control-label col-md-3">Custom Footer Block Title</label>
                                                <div class="col-md-9">
                                                    <input name="settings[custom_footer_title]" id="custom_footer_title" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['custom_footer_title']); ?>" value="<?php echo e($settings['custom_footer_title']); ?> "> </div>
                                            </div>
                                                                                     
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Custom Footer Block Description</label>
                                                <div class="col-md-9">
                                                     <textarea name="settings[custom_footer_desc]" id="custom_footer_desc" class="form-control" rows="3"><?php echo e($settings['custom_footer_desc']); ?></textarea> </div>
                                            </div>
                                                                                                                                                                                                                                  
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Your Location</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_location]" id="your_location" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_location']); ?>" value="<?php echo e($settings['your_location']); ?> "> </div>
                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                              <div class="form-group">
                                                <label class="control-label col-md-3">Your Facebook</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_facebook]" id="your_facebook" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_facebook']); ?>" value="<?php echo e($settings['your_facebook']); ?> "> </div>
                                            </div>                                                                                                                                                                                                                                         
                                                                                       
                                               <div class="form-group">
                                                <label class="control-label col-md-3">Your Twitter</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_twitter]" id="your_twitter" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_twitter']); ?>" value="<?php echo e($settings['your_twitter']); ?> "> </div>
                                                </div>
                                            
 											  <div class="form-group">
                                                <label class="control-label col-md-3">Your Linkedin</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_linkedin]" id="your_linkedin" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_linkedin']); ?>" value="<?php echo e($settings['your_linkedin']); ?> "> </div>
                                                </div>
                                                                                                                                                              
 											  <div class="form-group">
                                                <label class="control-label col-md-3">Your Google+</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_google_plus]" id="your_google_plus" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_google_plus']); ?>" value="<?php echo e($settings['your_google_plus']); ?> "> </div>
                                                </div>
                                                                                                                                                                            
  											  <div class="form-group">
                                                <label class="control-label col-md-3">Your Instagram</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_instagram]" id="your_instagram" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_instagram']); ?>" value="<?php echo e($settings['your_instagram']); ?> "> </div>
                                                </div>
                                                                                                                                                                                                                   
  											  <div class="form-group">
                                                <label class="control-label col-md-3">Your Dribbble</label>
                                                <div class="col-md-9">
                                                    <input name="settings[your_dribbble]" id="your_dribbble" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['your_dribbble']); ?>" value="<?php echo e($settings['your_dribbble']); ?> "> </div>
                                                </div>

                                                 
 											  <div class="form-group">
                                                <label class="control-label col-md-3">Website Copyright</label>
                                                <div class="col-md-9">
                                                    <input name="settings[website_copyright]" id="website_copyright" type="text" class="form-control input-circle" placeholder="<?php echo e($settings['website_copyright']); ?>" value="<?php echo e($settings['website_copyright']); ?> "> </div>
                                                </div>  
                                                
            								
                                         <div class="form-group">
                                          <label class="control-label col-md-3">Website Contact Message</label>
                                                <div class="col-md-9">
                                                   <textarea name="settings[website_message_contact]" id="website_message_contact" class="tinymce"><?php echo e($settings['website_message_contact']); ?></textarea></div>
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