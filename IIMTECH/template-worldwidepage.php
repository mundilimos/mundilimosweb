<?php
/**
 * Template Name: WW PAGE
 */
 
 
 
  get_header(); 
$page_layout = get_post_meta( $post->ID, '_layout', true );
 global $post;
  ?>
  
  
  <!-- LOOOOOOP LOOOOP LOOOOOP UNITEDSTATES PAGE PHP -->
  
  
  
  
  
  
  
  <?php if ( is_page( 8510 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->

<div class="col-md-3">
<?php
//page id
  $page_id = array( '8561' ); //example stores multiple page ID in an array
  $page_data = get_page( '8561' );
  $title = $page_data->post_title;


//render image for each page using foreach conditional loop
foreach($page_id as $id){

  if (has_post_thumbnail($id) ):
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'single-post-thumbnail' );
    $title = get_the_title($id);
   endif;
    
  

   echo " <img src='".$image[0]."'>";
?>

<h3 style="text-align:center;font-size: 20px; "> <br /> <a href="<?php the_permalink($id); ?> "><?php echo $title; ?></a></h3> 
 </div>
<?php } ?>

</div>

<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




 
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- If its United States Page -->



<?php if ( is_page( 8561 ) ) { ?>
<div class="container"> 
<div class="row"> 
  
 
<!-- LOOP SETTINGS STARTS -->

 
<?php
//page id


$args = array( 'orderby'=> 'title', 'order' => 'ASC' );


  $page_idd = array('8567','8571','8579','8650','8655','8658','8662','8665','8668','8671','8674','8677','8680','8683','8686','8689','8692','8695','8698','8702','8705','8708','8711','8714','8717','8721','8724','8727','8736','8740','8743','8746','8749','8752','8756','8759','8762','8765','8768','8771','8774','8777','8781','8784','8787','8790');
     
 
  
  $page_dataa = get_page( $page_idd );
  $titlee = $page_dataa->post_title;


//render image for each page using foreach conditional loop
foreach($page_idd as $idd){

  if (has_post_thumbnail($idd) ):
    $imagee = wp_get_attachment_image_src( get_post_thumbnail_id($idd), 'single-post-thumbnail' );
    $titlee = get_the_title($idd);
   endif;
    
  

   echo '<div class="col-md-3 hello123"><div class="col90img"> <img src="'.$imagee[0].'">';
?>

<h3 style="text-align:center;font-size: 20px; "> <br /> <a href="<?php the_permalink($idd); ?> "><?php echo get_the_title($idd) ?></a></h3></div></div>

<?php } ?>

</div>
</div>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




 
<div style="clear:both !Important;"> </div>


<?php } ?>














<!-- Worldwide ends and New York Starts -->





<?php if ( is_page( 8554 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NY&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for country's

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Ny Ends CA Starts --> 


<?php if ( is_page( 8556 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WORLDWIDE&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for country's

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Ca Ends Wa Dc starts -->


<?php if ( is_page( 8558 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WORLDWIDE&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for country's

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Wa Dc ends FL starts -->




<?php if ( is_page( 8552 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WORLDWIDE&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for country's

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- FL Ends -->


<!-- NY PAGE -->

<?php if ( is_page( 8567 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NY&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!--  CALI PAGE -->

<?php if ( is_page( 8571 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=CA&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- WA DC -->


<?php if ( is_page( 8579 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WASHINGTONDC&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- NEVADA -->


<?php if ( is_page( 8650 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NV&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- if texas -->


<?php if ( is_page( 8655 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=TX&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- if its FLORIDA -->


<?php if ( is_page( 8658 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=FL&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




 


<div class="col-md-3"> 
<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>
</div>
 
 
 

 
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- Colorado -->
<?php if ( is_page( 8662 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=CO&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- New Jersey -->



<?php if ( is_page( 8665 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NJ&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Illinois  -->




<?php if ( is_page( 8668 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=IL&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Louisiana -->



<?php if ( is_page( 8671 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=LA&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- MASSACHUSETTS -->

<?php if ( is_page( 8674 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=MA&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>




<!-- Michigan -->


<?php if ( is_page( 8692 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=MI&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- North Carolina -->


<?php if ( is_page( 8695 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NC&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- South Carolina -->


<?php if ( is_page( 8698 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=SC&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Pennsylvania -->


<?php if ( is_page( 8702 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=PA&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- CT -->


<?php if ( is_page( 8711 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=CT&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- INDIANA -->


<?php if ( is_page( 8714 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=IN&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Minnesota -->


<?php if ( is_page( 8717 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=MN&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- mississippi -->


<?php if ( is_page( 8721 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=MS&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>









<!-- OHIO -->


<?php if ( is_page( 8724 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=OH&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>





<!-- Oregon -->


<?php if ( is_page( 8727 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=OR&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- Rhode Island -->

<!-- Oregon -->


<?php if ( is_page( 8736 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=RI&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- Oklahoma -->


<?php if ( is_page( 8740 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=OK&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- North Dakota -->


<?php if ( is_page( 8743 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=ND&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- West Virginia -->


<?php if ( is_page( 8746 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WV&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- Wisconsin -->


<?php if ( is_page( 8749 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WI&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Wyoming -->


<?php if ( is_page( 8752 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WY&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Vermont -->


<?php if ( is_page( 8756 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=VT&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- New Hampshire -->


<?php if ( is_page( 8759 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NH&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Nebraska -->


<?php if ( is_page( 8762 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=NE&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>




<!-- Montana -->


<?php if ( is_page( 8765 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=MT&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Missouri -->


<?php if ( is_page( 8768 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=M0&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>



<!-- Kentucky -->


<?php if ( is_page( 8774 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=KY&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>

<!-- Idaho -->


<?php if ( is_page( 8781 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=ID&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


<!-- Delaware -->


<?php if ( is_page( 8784 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=DE&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>


 
<!-- Washington -->


<?php if ( is_page( 8787 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=AR&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>




<?php if ( is_page( 8790 ) ) { ?>
  <div class="col90">
 
<!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'category_name=WA&posts_per_page=50' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->




<div class="col-md-3">

<div class="col90img"> 
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?>  

<br /> 

<h3 style="text-align:center;font-size: 20px; "><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3> 
</div>

 
 
 

</div>
 
<?php endwhile;
wp_reset_postdata();

//ends loop for countrys

 ?>
 

</div>
<div style="clear:both !Important;"> </div>


<?php } ?>
  
  
  
  
  
  
  
  
  
  
  <!-- LOOOP CLOSING --- LOOP CLOSING -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <?php get_footer(); ?>