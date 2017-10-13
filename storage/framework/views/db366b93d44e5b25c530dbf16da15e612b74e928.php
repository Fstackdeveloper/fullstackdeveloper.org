    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?php echo e(route('frontend.home')); ?>#page-top"><?php echo e($settings['website_title']); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('frontend.home')); ?>#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('frontend.home')); ?>#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('frontend.home')); ?>#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
