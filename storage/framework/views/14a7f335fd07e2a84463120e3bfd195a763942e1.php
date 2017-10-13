    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="<?php echo e(Storage::url($settings['your_photo'],'public')); ?>" alt="">
        <div class="intro-text">
          <span class="name"><?php echo e($settings['your_name']); ?></span>
          <hr class="star-light">
          <span class="skills"><?php echo e($settings['your_skills_short']); ?></span>
        </div>
      </div>
    </header>