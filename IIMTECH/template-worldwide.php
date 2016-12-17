<?php
/**
 * Template Name: Services Template
 */
 
 
 
  get_header(); 

 
  ?>
 
 
 
 <div class="container">
 
 
 
 
 <div class="text-center">
<h2> SERVICES</h2>
<br><br>
<h3>YOUR EXPERIENCE, OUR EXPERIENCE
</h3><br><br>
<p>Our services are designated to offer the prime experience in chauffeured ground transportation, overwhelming our clients – however corporate or private; large or small. We integrate the industry leading technologies and human logistics solutions for you in ways others can only aspire. We anticipate your needs at every turn with the utmost display of carefulness, ethics and professionalism. Our confidence and your satisfaction are the sole indicators of our success.
</p> 
<br>
<br>

 </div>
 
 <!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=SERVICES&posts_per_page=12' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="thebox col-md-6" style="position:relative;">

<div class="theboxinner">
<a href="<?php the_permalink(); ?> "> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?> 
</a> 
<h3 class="text-center"><a class="boxh3a" href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>


</div>


<?php endwhile;
wp_reset_postdata();
 ?>
 
 
 </div>
 
 
 
          <?php get_footer(); ?>