<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EPRG-PPP
 */

get_header();
?>

	<div class="single-post">

		<main id="primary" class="site-main">
			<div class="container">
				<div class="row" id="primary">
					
					<div id="content" class="col-md-8">
						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>


						<article class="post">
							<header>
								<h1><?php the_title();?></h1>
								<div class="post-details">
									<i class="bi bi-people-fill"></i><span><?php the_author();?></span>
									<i class="bi bi-clock-fill"></i><span><?php the_date();?></span>
									<i class="bi bi-folder-fill"></i><span><?php the_category(', '); ?></span>
								</div><!-- post-details -->
							</header>
							<div class="post-image">
								<?php eprg_ppp_post_thumbnail(); ?>
							</div><!-- post-image -->
							<div class="post-body">
								<?php the_content();?>
							</div><!-- post-body -->
		    			</article><!-- post -->
		    	
						

						<?php endwhile; ?>
					</div>

					<!-- SIDEBAR
					================================================== -->
					<aside class="col-md-4">
						<?php get_sidebar();?>
					</aside>
				</div>
			</div>

			
			

		</main><!-- #main -->
	</div>

<?php

get_footer();
