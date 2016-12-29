<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that other

 * 'pages' on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Thirteen

 * @since Twenty Thirteen 1.0

 */



get_header(); ?>



 

	<div id="primary" class="content-area">

		<div id="content" class="site-content col-md-8" role="main">

			<?php /* The loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>


 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">





<?php if(! is_page('8907') ) { ?>

						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

						<div class="entry-thumbnail">

							<?php the_post_thumbnail(); ?>

						</div>
                        
                        
                        

						<?php endif; ?>

 <?php } ?>

 
					 

 
					</header><!-- .entry-header -->



					<div class="entry-content">

<?php if(! is_page('8907') ) { ?>
						<div itemscope="" itemtype="http://schema.org/Service">
<h1 itemprop="description" class="center scopeh1 "><?php the_title(); ?> </h1>
</div>   


<?php } ?>






	
    
    
    					<?php the_content(); ?>

	
    
    
    
    
    
    					

					</div><!-- .entry-content -->




 



				</article><!-- #post -->






			<?php endwhile; ?>



		</div><!-- #content -->

	</div><!-- #primary -->

<div class="col-md-4">

<?php get_sidebar(); ?> </div>

<?php get_footer(); ?>