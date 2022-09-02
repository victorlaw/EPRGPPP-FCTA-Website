<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EPRG-PPP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<article class="blog-post shadow">
        	<?php if(has_post_thumbnail()) { ?>
				<div class="blog-post-img">
					<?php eprg_ppp_post_thumbnail(); ?>
				</div>
			<?php } ?>
                <div class="blog-info">
                    <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                    <div class="post-details">
						<i class="bi bi-people-fill"></i><span><?php the_author();?></span>
						<i class="bi bi-clock-fill"></i><span><?php the_date();?></span>
						<i class="bi bi-folder-fill"></i><span><?php the_category(', '); ?></span>
						<?php edit_post_link('edit','<i class="bi bi-pencil-fill"></i>'); ?>
					</div>
                        <div class="blog-posts-text">
							<?php echo wp_trim_words( get_the_content(), 25);?></br>
							<a href="<?php the_permalink(); ?>">continue reading »</a>	
						</div>
						
						
                </div>
        </article>

</article><!-- #post-<?php the_ID(); ?> -->
