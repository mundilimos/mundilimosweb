<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

 
<div class="container">		<div class="col-md-8"><?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            
            
            
<a href="<?php the_permalink(); ?> "> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?> 
</a> 
<h3 class=""><a  href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 

<p> <?php the_excerpt(); ?></p>

<hr>


		<?php endwhile;
wp_reset_postdata();
 ?> <?php endif; ?>
 
 
 
 </div>

  <div class="col-md-4">
<?php get_sidebar(); ?> </div> </div>

	 
<?php get_footer(); ?>
