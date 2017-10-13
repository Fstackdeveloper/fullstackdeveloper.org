 <?php if( $RemoveUL == 0 ): ?>                           
 <ul class="sub-menu">
 <?php endif; ?>
 
<?php $__currentLoopData = $adminmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                               	<li class="nav-item <?php if($value->root == 1): ?>  start <?php endif; ?> <?php echo e($value->active ? ' active open' : ''); ?>">
                                <a href="<?php echo e($value->route ? route($value->route) : 'javascript:;'); ?>" class="nav-link  <?php echo e((count($value->childs) > 0) ? ' nav-toggle' : ''); ?> ">
                                    <i class="icon-<?php echo e($value->icon); ?>"></i>
                                    <span class="title"><?php echo e($value->title); ?></span>
                                    <?php if( $value->active): ?> <span class="selected"></span> <?php endif; ?>
                                    <?php if(count($value->childs) > 0): ?> <span class="arrow <?php echo e(($value->active)? ' open' : ''); ?>"></span> <?php endif; ?>
                                </a>
<?php if(count($value->childs) > 0): ?>

<?php echo $__env->make('admin.commons.sidebarItem', array('adminmenu'=> $value->childs, 'RemoveUL'=>0), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php endif; ?>
								</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php if($RemoveUL == 0): ?> 
</ul>
 <?php endif; ?>