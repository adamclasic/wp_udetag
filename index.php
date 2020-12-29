    <?php get_header(); ?>
    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

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

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">
              <?php while (have_posts()) {
                the_post();
                get_template_part('template-parts/post', 'single'); 
              ?>
                      <?php }; ?>
<!-- 
              <div class="entry clearfix">
                <div class="entry-image">
                  <iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0"
                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="entry-title">
                  <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 16th February 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
                  <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis
                    quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in
                    neque veniam debitis placeat quo unde reprehenderit eum facilis vitae. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Nihil, reprehenderit!</p>
                  <a href="blog-single-full.html" class="more-link">Read More <i class="icon-caret-right"></i></a>
                </div>
              </div>

              <div class="entry clearfix">
                <div class="entry-image">
                  <div class="fslider" data-arrows="false" data-lightbox="gallery">
                    <div class="flexslider">
                      <div class="slider-wrap">
                        <div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img
                              class="image_fade" src="images/blog/standard/10.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                        <div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img
                              class="image_fade" src="images/blog/standard/20.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                        <div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img
                              class="image_fade" src="images/blog/standard/21.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="entry-title">
                  <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 24th February 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                  <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi
                    autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                    exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio
                    sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident
                    deserunt. Saepe!</p>
                  <a href="blog-single-small.html" class="more-link">Read More</a>
                </div>
              </div>

              <div class="entry clearfix">
                <div class="entry-image clearfix">
                  <iframe width="100%" scrolling="no" frameborder="no"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                </div>
                <div class="entry-title">
                  <h2><a href="single.html">This is an Embedded Audio Post</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 28th April 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
                  <li><a href="single.html#comments"><i class="icon-comments"></i> 16 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi
                    autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                    exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio
                    sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident
                    deserunt. Saepe!</p>
                  <a href="single.html" class="more-link">Read More</a>
                </div>
              </div> -->

            </div>
            
            <!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
              <?php echo get_next_post_link('&larr; Older'); ?>
               
                <a href="<?php echo get_next_post_link('&larr; Older'); ?>" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="<?php echo get_previous_post_link('Newer &rarr;'); ?>" class="btn btn-outline-dark float-right">
                  Newer &rarr;
                </a>
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
   