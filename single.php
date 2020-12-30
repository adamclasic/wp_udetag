

    <?php get_header();
    while (have_posts()) {
      the_post(); 
    ?>

    <!-- Content
        ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="container clearfix">

          <!-- Post Content
                      ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <div class="single-post nobottommargin">

              <!-- Single Post
                            ============================================= -->
              <div class="entry clearfix">

                <!-- Entry Title
                                ============================================= -->
                <div class="entry-title">
                  <h2><?php the_title() ?></h2>
                </div><!-- .entry-title end -->

                <!-- Entry Meta
                                ============================================= -->
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> <?php echo get_the_date() ?></li>
                  <li>
                    <a href="#">
                      <i class="icon-user"></i> admin
                    </a>
                  </li>
                  <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a>
                  </li>
                  <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                </ul><!-- .entry-meta end -->

                <!-- Entry Image
                                ============================================= -->
                <div class="entry-image">
                  <a href="#"><img src="images/blog/full/1.jpg"></a>
                </div><!-- .entry-image end -->

                <!-- Entry Content
                                ============================================= -->
                <div class="entry-content notopmargin">

                <?php the_content() ?>
                  <!-- Post Single - Content End -->

                  <!-- Tag Cloud
                                    ============================================= -->
                  <div class="tagcloud clearfix bottommargin">
                    <a href="#">general</a>
                    <a href="#">information</a>
                    <a href="#">media</a>
                    <a href="#">press</a>
                    <a href="#">gallery</a>
                    <a href="#">illustration</a>
                  </div><!-- .tagcloud end -->

                  <div class="clear"></div>

                </div>
              </div><!-- .entry end -->

              <!-- Post Navigation
                            ============================================= -->
              <div class="post-navigation clearfix">

                <div class="col_half nobottommargin">
                  <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                </div>

                <div class="col_half col_last tright nobottommargin">
                  <a href="#">This is an Embedded Audio Post &rArr;</a>
                </div>

              </div><!-- .post-navigation end -->

              <div class="line"></div>

              <!-- Post Author Info
                            ============================================= -->
              <div class="card">
                <div class="card-header">
                  <strong>
                    Posted by
                    <a href="#"><?php the_author(); ?></a>
                  </strong>
                </div>
                <div class="card-body">
                  <div class="author-image">
                    <img src="images/author/1.jpg" class="rounded-circle">
                  </div>
                  <?php the_author_meta('description'); ?>
                </div>
              </div><!-- Post Single - Author End -->

              <div class="line"></div>

              <h4>Related Posts:</h4>

              <div class="related-posts clearfix">

              <?php $ud_related_posts = new WP_Query([
                'posts_per_page' => 2,
                'post__not_in' => [get_the_ID()],
              ]);
              while ($ud_related_posts->have_posts()) {
                $ud_related_posts->the_post();
                
                ?>
                <div class="mpost clearfix">
                  <div class="entry-image">
                    <a href="#">
                      <img src="images/blog/small/10.jpg">
                    </a>
                  </div>
                  <div class="entry-c">
                    <div class="entry-title">
                      <h4>
                        <a href="<?php the_permalink(); ?>">
                          <?php echo get_the_title(); ?>
                        </a>
                      </h4>
                    </div>
                    <ul class="entry-meta clearfix">
                      <li><i class="icon-calendar3"></i> 10th July 2014</li>
                      <li><i class="icon-comments"></i> <?php echo get_comments_number( $post->id );; ?></li>
                    </ul>
                    <div class="entry-content">
                    <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
                <?php
              }
              wp_reset_postdata(); 
              ?>




              </div>

              <!-- Comments
                            ============================================= -->
                            <?php comments_template(); ?>
              <!-- #comments end -->

            </div>

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
      <?php } ?>
    </section><!-- #content end -->
<?php wp_footer(); ?>