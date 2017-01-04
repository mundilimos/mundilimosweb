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

    <div class="text-center">

<div style="max-width: 800px; margin: auto; width: 100%" class="contactpagelinks">

        <div class="col-md-6"> <a href="tel:8003177087" class="cta">  <i class="fa fa-phone" aria-hidden="true"></i>   &nbsp; 800.317.7087 </a> </div>
        <div class="col-md-6"> <a href="mailto:info@mundilimos.com" class="cta"> <i class="fa fa-envelope" aria-hidden="true"> </i>  &nbsp; info@mundilimos.com</a> </div>

</div>

    </div>

<br /><br />
    <h4 class="text-white text-center" style="    font-size: 16px;
    max-width: 700px;
    margin: auto;
    font-weight: 100;
    padding: 10px;">

        Allow our team of seasoned travel and transportation professionals to assist you. Around the corner or around the globe, our operators are standing by 24 hours a day.

    </h4>


    <br /> <br /> <br />

    <div class="contactpageform">
<?php
echo do_shortcode( '[contact-form-7 id="6342" title="contact"]' );
?>


    </div>


    <br /> <br /> <br />

</div>





 <div id="quote"><a name="quote"></a></div>
 


</article>



						<?php endwhile; ?>

 
 
 
 </div>
 
 
 
 
 
 
 
 
 <?php get_footer(); ?>