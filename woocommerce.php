<?php get_header(); ?>

<!-- #header end -->

    <!-- Page Title
        ============================================= -->
    <section id="page-title">
      <div class="container clearfix">
        <h1>Page Title</h1>
        <span>Page Subtitle: page.php file</span>
      </div>
    </section><!-- #page-title end -->

    <!-- Content
        ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="container clearfix">

          <!-- Post Content
                    ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <?php // the_content(); ?>
            <?php woocommerce_content(); ?>
          </div><!-- .postcontent end -->

          <!-- Sidebar
                    ============================================= -->
          <div class="sidebar nobottommargin col_last">
            <div class="sidebar-widgets-wrap">

              <div class="widget clearfix">
                <h4>Recipes of the Day</h4>

                <div class="portfolio-image">
                  <a href="#">
                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                  </a>
                </div>
                <div class="portfolio-desc center nobottompadding">
                  <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                </div>
              </div>

              <div class="widget clearfix">

                <h4>Tag Cloud</h4>
                <div class="tagcloud">
                  <a href="#">general</a>
                  <a href="#">videos</a>
                  <a href="#">music</a>
                  <a href="#">media</a>
                  <a href="#">photography</a>
                  <a href="#">parallax</a>
                  <a href="#">ecommerce</a>
                  <a href="#">terms</a>
                  <a href="#">coupons</a>
                  <a href="#">modern</a>
                </div>

              </div>
            </div>

          </div><!-- .sidebar end -->

        </div>

      </div>

    </section><!-- #content end -->

    <!-- Footer
        ============================================= -->
		<?php get_footer(); ?>
