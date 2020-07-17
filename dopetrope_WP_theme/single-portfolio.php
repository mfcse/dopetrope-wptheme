	<?php get_header();
		
	?>
		


			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
								<?php 
								$today=date('Ymd');
            $findPortfolio=new WP_Query(array(
              'posts_per_page'=>-1,
              'post_type'=>'portfolio',
              //'meta_key'=>'event_date',
              // 'orderby'=>'title',
              // 'order'=>'ASC',
              // 'meta_query'=>array(
              //   // array(
              //   //   'key'=>'event_date',
              //   //   'compare'=>'>=',
              //   //   'value'=>$today,
              //   //   'type'=>'numeric'
              //   // ),
              //   array(
              //     'key'=>'related_programs',
              //     'compare'=>'LIKE',
              //     'value'=>'"'.get_the_ID().'"'
              //   )
              // )
              
            ));
              //if ($findPortfolio->have_posts()) {
                //echo '<hr class="section-break">';
              //echo '<h2 class="headline headline--medium">'.get_the_title().' Professors</h2>';

              
              //echo '<ul class="professor-cards">';
            while($findPortfolio->have_posts()){
              $findPortfolio->the_post(); ?>
								<!-- while (have_posts()) {
									# code...
									the_post(); ?> -->
									<!-- Content -->
									<article class="box post">
										<?php  the_post_thumbnail('home-featured') ?>
										<header>
											<?php the_title(); ?>
											
										</header>
										<p>
											<?php the_content() ?>
										</p>
										<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink() ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
															<!-- <li><a href="<?php comments_link() ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number(); ?> comments</a></li> -->
														</ul>
													</footer>
										
									</article>
								<?php 
								} ?>
								

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
										<?php dynamic_sidebar('main_sidebar') ?>
									</section>

							</div>
						</div>
					</div>
				</section>

 
 <?php get_footer();?>
