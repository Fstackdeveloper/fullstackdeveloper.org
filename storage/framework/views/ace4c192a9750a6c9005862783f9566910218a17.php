  <!-- Portfolio Modals -->
 <?php $__currentLoopData = $Projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo e($Project->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2> <?php echo e($Project->title); ?></h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="<?php echo e(Storage::url($Project->image,'public')); ?>" alt="">
                  <p><?php echo e($Project->description); ?></p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                       <?php echo e($clients[$Project->project_clients_id]->name); ?>


                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <?php echo e($Project->release_date); ?>

                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <?php echo e($categories[$Project->project_categories_id]->title); ?>

                      </strong>
                    </li>
                    
                    
                    <?php if(isset($Project->url )): ?>

                    <li>
						<a href=" <?php echo e($Project->url); ?>" target="_blank" class="btn btn-primary btn-lg btn-block">Click to Browse Project</a>

                    </li>
                    <?php endif; ?>

                    
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    