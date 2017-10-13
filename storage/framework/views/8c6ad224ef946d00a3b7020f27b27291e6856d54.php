<!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p><?php echo html_entity_decode($settings['your_location']); ?></p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <?php if($settings['your_facebook']): ?>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo e($settings['your_facebook']); ?>">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <?php endif; ?>
                <?php if($settings['your_google_plus']): ?>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo e($settings['your_google_plus']); ?>">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <?php endif; ?>
				<?php if($settings['your_twitter']): ?>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo e($settings['your_twitter']); ?>">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <?php endif; ?>
                <?php if($settings['your_linkedin']): ?>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo e($settings['your_linkedin']); ?>">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <?php endif; ?>
                <?php if($settings['your_instagram']): ?>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="<?php echo e($settings['your_instagram']); ?>">
                    <i class="fa fa-fw fa-instagram"></i>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3><?php echo e($settings['custom_footer_title']); ?></h3>
              <p><?php echo html_entity_decode($settings['custom_footer_desc']); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; <?php echo html_entity_decode($settings['website_copyright']); ?>

            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary page-scroll" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    
   
  <?php echo $__env->make('frontend.commons.scriptFooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>         
