<?php
/**
 * Template Name: Services Template
 */
 
 
 
  get_header(); 

 
  ?>
 
 
 
 <div class="container">
 
 
 
 
 <div class="text-center">

<h3>YOUR EXPERIENCE, OUR EXPERIENCE
</h3><br><br>
<p>Our services are designated to offer the prime experience in chauffeured ground transportation, overwhelming our clients – however corporate or private; large or small. We integrate the industry leading technologies and human logistics solutions for you in ways others can only aspire. We anticipate your needs at every turn with the utmost display of carefulness, ethics and professionalism. Our confidence and your satisfaction are the sole indicators of our success.
</p> 
<br>
<br>

 </div>
 
 <!-- LOOP SETTINGS STARTS -->









     <ul class="nav nav-tabs">
         <!-- 'tabs-right' for right tabs -->
         <li class="active"><a href="#1" data-toggle="tab" aria-expanded="false">CORPORATE TRANSPORTATION</a></li>
         <li class=""><a href="#2" data-toggle="tab" aria-expanded="false">AIRPORT TRANSPORTATION</a></li>
         <li class=""><a href="#3" data-toggle="tab" aria-expanded="true">NIGHTLIFE</a></li>
         <li class=""><a href="#4" data-toggle="tab" aria-expanded="false">CITY TOURS</a></li>
         <li class=""><a href="#5" data-toggle="tab" aria-expanded="false"> CEREMONIES</a></li>
         <li class=""><a href="#6" data-toggle="tab" aria-expanded="false"> SEAPORT TRANSPORTATION</a></li>

         <div style="clear: both;"></div>
         <br>

         <li class=""><a href="#7" data-toggle="tab" aria-expanded="false">CELEBRATIONS</a></li>
         <li class=""><a href="#8" data-toggle="tab" aria-expanded="false">BARS / RESTAURANTS</a></li>
         <li class=""><a href="#9" data-toggle="tab" aria-expanded="false">  SPORTING EVENTS</a></li>

         <li class=""><a href="#10" data-toggle="tab" aria-expanded="false"> PERFORMING ARTS EVENTS</a></li>
         <li class=""><a href="#11" data-toggle="tab" aria-expanded="false">PERFORMING ARTS EVENTS</a></li>
         <li class=""><a href="#12" data-toggle="tab" aria-expanded="false">HOTELS / CASINOS</a></li>

     </ul>




     <div style="clear:both;"></div>








    <div class="tab-content" style="padding-bottom: 30px;">



     <?php  $the_query = new Wp_query( 'category_name=SERVICES&posts_per_page=12' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->

    <div   class="tab-pane <?php if ( is_page('9071') ){ ?> active <?php } ?>" id="<?php echo the_field('pos') ?>">


<h3 class="text-white text-center">  <?php echo the_field('hone'); ?>   </h3>
<p class="centerp text-center">   <?php echo the_field('pone')?>  </p>


        <div style="clear: both;"></div>

    <div class="col-md-8">

<?php if( has_post_thumbnail() ){ the_post_thumbnail(); } ?> 
 </div>





<div class="col-md-4 servicesul">
        <?php echo the_field('imgsrc') ?>
</div>


</div>


<?php endwhile;
wp_reset_postdata();
 ?>
 
 
 </div>
 
 
 
          <?php get_footer(); ?>