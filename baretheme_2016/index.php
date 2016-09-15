<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	</div><!-- .site-content -->
			<div class="category-menus">
				<?php if ( has_nav_menu( 'categories' ) ) : ?>
					<nav id="site-navigation" class="primary-nav" role="navigation">
				    <?php
				    wp_nav_menu( array(
				    	'menu_class'     => 'nav-menu',
				    	'theme_location' => 'categories',
				    	) );
				    	?>
				    </nav><!-- .categories-nav -->
				<?php endif; ?>
			</div>

			<div id="fullpage" class="fullpage-wrapper" style="top:0">
				<div class="section">
					<?php if ( have_posts() ) : ?>
						<?php
						$count = 0;
						while ( have_posts() ) : 
							the_post();
							if ($count <= 5) { 
								if ( has_post_thumbnail() ) {
									$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
									?>

									<div class="slide" id="post<?php echo $count?>" style="background-image: url(<?php echo $src[0]; ?>);">
											<a href="<?php the_permalink(); ?>">
												<div class="slide-title">
													<?php echo strtoupper(get_the_title($post->ID)); ?>
												</div>
											</a>
							        </div><?php

									$count++;
								} 
							} else {
								break;
							}
						endwhile;
					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );
					endif;
					?>
			   	</div>
	    	</div>

</div><!-- .site -->

<div class="admin-login"><a href="<?php echo admin_url();?>">STAFF LOGIN</a></div>
<?php wp_footer(); ?>

</body>
</html>