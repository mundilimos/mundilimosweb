<?php
/**
 * Template Name: About Us Template
 */

get_header();

?>



<div class="container">





    <?php while ( have_posts() ) : the_post(); ?>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





        <?php the_content(); ?>


</article>

</div>







<?php get_footer(); ?>






