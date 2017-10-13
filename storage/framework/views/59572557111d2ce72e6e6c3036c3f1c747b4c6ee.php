    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e($settings['website_title']); ?> - <?php echo $__env->yieldContent('title'); ?></title>
    
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <meta name="description" content="<?php echo e($settings['website_desc']); ?>">
    

   <?php echo $__env->make('frontend.commons.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>         

    <link rel="canonical" href="<?php echo e(Request::url()); ?>">

    <link rel="alternate" type="application/rss+xml" title="Full Stack Developer" href="/feed.xml">

   <?php echo $__env->make('frontend.commons.scriptHead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>         





<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67823871-12', 'auto');
  ga('send', 'pageview');

</script>