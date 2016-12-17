<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 

//posts
?>



 

	<div id="primary" class="content-area">

		<div id="content" class="site-content col-md-8" role="main">

			<?php /* The loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>


 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">





 

						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

						<div class="entry-thumbnail">

							<?php the_post_thumbnail(); ?>

						</div>
                        
                        
                        

						<?php endif; ?>
 
 
 
 
					</header><!-- .entry-header -->



					<div class="entry-content">

 
						<div itemscope="" itemtype="http://schema.org/Service">
<h1 itemprop="description" class="center scopeh1 "><?php the_title(); ?> </h1>
</div>   

<br />
 

<?php the_content(); ?>


 

						 
 						

					</div><!-- .entry-content -->



 <div class="clear-fix"></div>
 
 
 <br><br>
 
 <h2 class="text-center">  Did You Know? </h2>
 <hr>
 
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NEW&posts_per_page=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->



<div class="col-md-4">
<div class="newcategory">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  
<a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>


 
 </div>
 </div>

 
<?php endwhile;
wp_reset_postdata();

//ends loop

 ?>

 
				</article><!-- #post -->



			<?php endwhile; ?>



		</div><!-- #content -->

	</div><!-- #primary -->

<div class="col-md-4">

<?php get_sidebar(); ?> </div>



 




 



 




<?php get_footer(); ?>