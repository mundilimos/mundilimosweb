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




<?php

if (! wp_is_mobile() ) { ?>
 
<a href="https://book.mylimobiz.com/v4/mundilimo" data-ores-widget="website" data-ores-alias="mundilimo">Online Reservations</a>
<script type="text/javascript" src="https://book.mylimobiz.com/v4/widgets/widget-loader.js"></script>
 
<?php } ?>


<?php if ( wp_is_mobile() ) { 

echo do_shortcode( '[contact-form-7 id="8017" title="Page Forms"]' );



}
?>


 <div id="quote"><a name="quote"></a></div>
 


</article>



						<?php endwhile; ?>

 
 
 
 </div>
 
 
 
 
 
 
 
 
 <?php get_footer(); ?>