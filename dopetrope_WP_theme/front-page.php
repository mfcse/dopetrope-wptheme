	<?php get_header();
		
	?>
		<!-- Header -->
				<section id="header">

				
					<!-- Banner -->
						<!-- <section id="banner" >
							<header>
								<h2>Howdy. This is Dopetrope.</h2>
								<p>A responsive template by HTML5 UP</p>
							</header>
						</section> -->
						<?php dynamic_sidebar('home-banner'); 
							
						?>

						<?php dynamic_sidebar('home-services'); ?>

					

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">
											<!-- loop -->
											<?php 
												$portfolio_args=array(
													'post_type' => 'portfolio',
													'posts_per_page' => 3
												);
												$portfolio_posts=new WP_Query($portfolio_args);
												while ($portfolio_posts->have_posts()) {
													$portfolio_posts->the_post();?>
											
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<?php the_post_thumbnail('medium'); ?>
													<header>
														<h3><?php the_title() ?></h3>
													</header>
													<p><?php the_excerpt() ?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
												
											
												<?php }
												wp_reset_postdata();
											 ?>
											
											
										</div>
										<header class="major">
												<h2><a style="color:#E53359 !important;" href="<?php echo site_url('/portfolio'); ?>">View All From Portfolio</a></h2>
												</header>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
											<?php 
												$blog_args=array(
													'post_type' => 'post',
													'posts_per_page' => 2
												);
												$blog_posts=new WP_Query($blog_args);
												while ($blog_posts->have_posts()) {
													$blog_posts->the_post();?>
												
											<div class="col-6 col-12-small">
												<section class="box">
													<span  class="image featured">
														<?php the_post_thumbnail('home-featured'); ?>
													</span>
													<header>
														<h3><?php the_title(); ?></h3>
														<p>Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
													</header>
													<p><?php the_content(); ?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
															<li><a href="<?php comments_link() ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number(); ?> comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
												<?php }
											 ?>
											
										</div>
										<header class="major">
												<h2><a style="color:#E53359 !important;" href="<?php echo site_url('/blog'); ?>">View All From Blog</a></h2>
												</header>
									</section>

							</div>
						</div>
					</div>
				</section>
 
 <?php get_footer();?>
