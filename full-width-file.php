<?php
/**
* Template Name: Full Width Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

<!-- #header end -->

    <!-- Page Title
        ============================================= -->
    <section id="page-title">
      <div class="container clearfix">
        <h1><?php the_title() ;?></h1>
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

            <?php the_content() ;?>

          </div><!-- .postcontent end -->

          

        </div>

      </div>

    </section><!-- #content end -->

    <!-- Footer
        ============================================= -->
		<?php get_footer(); ?>
