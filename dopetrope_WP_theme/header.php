<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
	<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php bloginfo('name') ?></title>
	
	<?php wp_head(); ?>
	</head>
	<body class="<?php body_class('homepage is-preload'); ?>">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<?php the_custom_logo(); ?>
						<!-- h1><a href="index.html">Dopetrope</a></h1> -->

					<!-- Nav -->
						<nav id="nav">
							<?php 

								wp_nav_menu(array(
								'theme_location'=>'primary',
								'container'=>'',
							
							));
							?>
						</nav>

				</section>