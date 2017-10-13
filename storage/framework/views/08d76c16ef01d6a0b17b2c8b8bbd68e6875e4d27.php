<!-- BEGIN HEAD --><head>
<meta charset="utf-8"/>
<title><?php echo e($settings['website_title']); ?> - <?php echo $__env->yieldContent('title'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="_token" content="<?php echo e(csrf_token()); ?>">


<?php echo $__env->make('admin.commons.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   


<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
