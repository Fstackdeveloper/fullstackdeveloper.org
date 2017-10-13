<ul>
<?php $__currentLoopData = $AdminMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li><?php echo e($value->title); ?>

<?php if( $value->childs != NULL ): ?>

<?php echo $__env->make('test', array('AdminMenu'=>$value->childs), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php endif; ?>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

