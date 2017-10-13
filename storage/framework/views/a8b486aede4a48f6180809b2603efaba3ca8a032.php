 <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">
            
             <?php $__currentLoopData = $Projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="col-sm-4 portfolio-item">
            <div class="portfolio-link" href="#portfolioModal<?php echo e($Project->id); ?>" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo e(Storage::url($Project->image,'public')); ?>" alt="">
            </div>
          </div>
          
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php if($Pagination): ?>
                 <div class="row">
 		  <div class="col-sm-12 mx-auto text-center">
<nav aria-label="Portfollio Pagination">

        
				<?php echo $Projects->render(); ?>

                
			  </nav>               
                
                 </div>
		  </div>

        
        <?php else: ?>
         <div class="row">
 		  <div class="col-lg-8 mx-auto text-center">
            <a href="<?php echo e(route('frontend.portfolio')); ?>" class="btn btn-lg btn-primary">
              <i class="fa fa-file-image-o"></i>
              More
            </a>
          </div>
		  </div>
      <?php endif; ?>

      </div>
    </section>