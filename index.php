    <?php get_header(); ?>
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">
        <?php if(is_front_page() AND is_home() AND get_theme_mod('breaking_news')) {?>
          <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
              <div class="container clearfix">
                <span class="badge badge-danger bnews-title">Breaking News:</span>

                <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                  data-pagi="false">
                  <div class="flexslider">
                    <div class="slider-wrap">
                      <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          </strong></a></div>
                      <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          </strong></a></div>
                      <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          </strong></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">
              <?php while (have_posts()) {
                the_post();
                get_template_part('template-parts/post', 'excerpt'); 
              ?>
                      <?php }; ?>
            </div>
            
            <!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
              <?php 
									echo paginate_links();
								?>  
              </div>
            </div>

            <!-- .pager end -->

          </div><!-- .postcontent end -->

          <!-- Sidebar
          ============================================= -->
          <?php get_sidebar() ?>
          <!-- .sidebar end -->

        </div>

      </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <?php get_footer(); ?>
   