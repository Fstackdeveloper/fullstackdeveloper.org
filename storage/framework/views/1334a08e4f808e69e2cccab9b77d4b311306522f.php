<?php $__env->startSection('title', 'Login'); ?>


<?php $__env->startSection('PagePluginsStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PageStyles'); ?>
<link href="<?php echo e(URL::asset('assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('ThemeLayoutStyles'); ?>
<link href="<?php echo e(URL::asset('assets/pages/css/login-4.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>


 <?php $__env->startSection('ThemeLayoutStyles'); ?>
 <?php $__env->stopSection(); ?>
 

<?php $__env->startSection('PagePluginsScripts'); ?>
<script src="<?php echo e(URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('PageScripts'); ?>
        <script src="<?php echo e(URL::asset('assets/pages/scripts/login-4.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>


 <?php $__env->startSection('LayoutScripts'); ?>
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                                        
            <form class="login-form"  method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
               
               <?php if(session('status')): ?>
               <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                
                <h3>Reset Password</h3>
                <p> Enter your e-mail address and new password. </p>
                
                <div class="form-group  <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                   <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="E-Mail Address" id="email" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus> </div>
                        
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
               
                </div>
                
                
                
               <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
               <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required> </div>
                        
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                </div>
                
                
               <div class="form-group <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
          	    <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required> </div>
                        
 								<?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>

               
                </div>
                
                   
                <div class="form-actions">
                    <button type="submit" class="btn green pull-right"> Submit </button>
                </div>
            </form>

<?php $__env->stopSection(); ?>






<?php echo $__env->make('admin.layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>