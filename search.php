		<?php get_header(); ?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Search Results for: Term</h1>
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

						<!-- Search Box
                        ============================================= -->
						<div class="col_full card">
							<div class="card-header">What are you searhing for today?</div>
							<div class="card-body">
								<?php get_search_form(); ?>
							</div>
						</div>
						<!-- Search Box End -->

						<!-- Posts
                        ============================================= -->
						<div id="posts">
						<?php while (have_posts()) {
                the_post();
                get_template_part('template-parts/post', 'excerpt'); 
              ?>
                      <?php }; ?>

						</div><!-- #posts end -->

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
										<?php get_sidebar(); ?>
				

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php get_footer(); ?>