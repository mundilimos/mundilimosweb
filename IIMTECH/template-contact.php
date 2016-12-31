<?php
/**
 * Template Name: Contact Us Template
 */ 
 
 get_header(); 
 
 ?>
 
 
 
 
 
 
 
 <div class="container">
 
 
 
 
 
 <?php while ( have_posts() ) : the_post(); ?>


 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





<?php the_content(); ?>






<div class="container">


    <div class="contactpageform">
<?php
echo do_shortcode( '[contact-form-7 id="6342" title="contact"]' );
?>


    </div>

</div>





 <div id="quote"><a name="quote"></a></div>
 


</article>



						<?php endwhile; ?>

 
 
 
 </div>
 
 
 
 
 
 
 
 
 <?php get_footer(); ?>