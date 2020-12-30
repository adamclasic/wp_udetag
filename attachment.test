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
              <div class="entry clearfix">
  <div class="entry-image">
    <a href="#">
      <!-- <img class="image_fade" src="images/blog/standard/17.jpg"> -->
      <?php the_post_thumbnail('full', ['class'=> "image_fade"]) ?>
    </a>
  </div>
  <div class="entry-title">
    <h2>
      <a href="<?php the_permalink() ?>">
        <?php the_title(); ?>
      </a>
    </h2>
  </div>
  <ul class="entry-meta clearfix">
    <li><i class="icon-calendar3"></i> <?php echo get_the_date() ?></li>
    <li>
      <a href="#">
        <i class="icon-user"></i>
        <?php the_author(); ?>
      </a>
    </li>
    <li>
      <i class="icon-folder-open"></i>
      <a href="#">General</a>, <a href="#">Media</a>
    </li>
    <li>
      <a href="#">
        <i class="icon-comments"></i>
        <?php echo get_comments_number(get_the_ID()); ?> Comment(s)
      </a>
    </li>
  </ul>
  <div class="entry-content">
    <p>
    <?php
    print_r($post);
     the_content(); ?>

    </p>
    <a href="<?php echo get_the_permalink(); ?>" class="more-link">Read More</a>
  </div>
</div>
                      <?php }; ?>
            </div>
            
            <!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
              <?php next_post_link('next'); ?>
              <?php previous_post_link(); ?>
               
                <a href="<?php next_post_link('&larr; Older'); ?>" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="<?php previous_post_link('Newer &rarr;'); ?>" class="btn btn-outline-dark float-right">
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
   