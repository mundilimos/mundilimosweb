<?php
/**
 * Template Name: Homepage Template
 */ 
 
 get_header(); 
 
 ?>
 
 
 	<?php while ( have_posts() ) : the_post(); ?>
			
<?php the_content(); ?>			
			
			
		<?php endwhile; ?>
            
        
        
        
                
       <?php
if (! wp_is_mobile() ) { ?>
       
       
        <div class="section1"> 
        
        
        
        
        <div class="col-md-12">
        
        <h2 class="text-center edge-title"> <?php the_field('s11'); ?> </h2>
        
        <p class="text-center s1p"> <?php the_field('s12'); ?> </p>
        
        
        <br>
<br>

        
        
        </div>
        
        <div class="col-md-6">
        
        <h2 class="text-center s11"> <?php the_field('s13'); ?> </h2>
        
        
         <div class="s11wrap">
         <p class="text-center s1p"> <?php the_field('s14'); ?> </p>
        </div>
        </div>
        
        <div class="col-md-6">
        
        <h2 class="text-center s11"> <?php the_field('s15'); ?> </h2>
        
        <div class="s11wrap">
        <p class="text-center s1p"> <?php the_field('s16'); ?> </p>
        </div>
        
        
        </div>
        
  
        
        
        
        
        
        
        
        
        
        </div>
        
        
        
        
        </div>
        
       <?php } ?>
     
     
     
       <?php
if (! wp_is_mobile() ) { ?>








 
       
       
        
        <div class="section2">
        
        
 <div class="sitewrapper container">
 
 
 
 
 
 <div class="col-md-4">
 <div class="crown cr1">
 
 <img src="/wp-content/uploads/2016/07/crownimage.png" />
 
 
 
 <h2 class="text-center color-white bold">  OUR MISSION </h2>
 <p class="m1p"> <?php the_field('m1p'); ?> </p>
 
 </div>
</div>


 <div class="col-md-4">
 <div class="crown cr2">
 <img src="/wp-content/uploads/2016/07/crownimage.png" />
 
 
  <h2 class="text-center color-white bold">  OUR VISION </h2>
 <p class="m2p"> <?php the_field('m2p'); ?> </p>
 
 </div>
</div>


 <div class="col-md-4">
 <div class="crown cr3">
 <img src="/wp-content/uploads/2016/07/crownimage.png" />
 
 
  <h2 class="text-center color-white bold">  OUR CULTURE </h2>
 <p class="m3p"> <?php the_field('m3p'); ?> </p>
 
 </div>
</div>
 </div>
 
 
 
        
         </div>
        
        
        <!-- bye bye on mobile -->
       
       <?php  } ?>
       
              <div class="clearfix"></div>

       
        
       
       
       
       
       
        
       <?php
if (! wp_is_mobile() ) { ?>


<section class="section25">
       
        <div class="clearfix"></div>

       
              <div class="container">
 
 
 
 
 <div class="text-center">
<h2> RECENT POSTS </h2>

<br><br><br>
 

 </div>
 
 <!-- LOOP SETTINGS STARTS -->
<?php  $the_query = new Wp_query( 'post_type=post&posts_per_page=6' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="thebox col-md-6" style="position:relative; margin:auto;">

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
 
 
 <div class="clearfix"></div>
       
              </section>

       
            <?php  } ?>
       
        
       
 <h2 class="edge-title text-center techh2" style="margin-top:2em !important;"> TECHNOLUXURY </h2>
<p class="text-center techp">
By incorporating the most advanced intelligent transportation systems (ITS) we offer a state of great comfort and extravagant living beyond comparison. Our industry leading applications aim to deliver precise, reliable and innovative services, enabling our clients to be better informed and make safer, more coordinated, and smarter use of our transport network. In addition to providing standard amenities such as personalized bottled water, mints, box of tissues, hand sanitizer, universal cell phone charger and luxury magazines, our services include unique features such as:
</p>
       


 <div class="clearfix"></div>

<?php
if (! wp_is_mobile() ) { ?>

<div class="col-md-2"> </div>

<?php } ?>

        
  <div class="<?php if (! wp_is_mobile() ) { ?> col-md-2 <?php } ?> <?php if ( wp_is_mobile() ) { ?> col-md-3 <?php } ?> boxdes1 bss"> 
  <!--icon -->
  
 <i class="fa fa-wifi" aria-hidden="true"></i>

  <strong> ONBOARD WI-FI </strong>
  <p> Our passengers are afforded the convenience of being connected at high speed during their transfers. </p>
  
  </div>  
  
    
  <div class="<?php if (! wp_is_mobile() ) { ?> col-md-2 <?php } ?> <?php if ( wp_is_mobile() ) { ?> col-md-3 <?php } ?> boxdes2 bss">
  
  <i class="fa fa-tablet" aria-hidden="true"></i>

  <strong>ONBOARD TABLET</strong>
<p>Anticipating the needs of our clients is what we do best. Every vehicle is equipped with a tablet and Wi-fi.
</p>


  
  </div>
  
 
  <div class="<?php if (! wp_is_mobile() ) { ?> col-md-2 <?php } ?> <?php if ( wp_is_mobile() ) { ?> col-md-3 <?php } ?> boxdes3 bss"> 
  <i class="fa fa-desktop" aria-hidden="true"></i>

<strong>  GPS VEHICLE TRACKING
</strong>

<p>Our vehicles are equipped with GPS technology so our clients wellbeing can be monitored in real time.</p>

   
   
  
  
  </div> 
     
  <div class="<?php if (! wp_is_mobile() ) { ?> col-md-2 <?php } ?> <?php if ( wp_is_mobile() ) { ?> col-md-3 <?php } ?> boxdes4 bss"> 
  <i class="fa fa-plane" aria-hidden="true"></i>

<strong>  FLIGHT TRACKING
</strong>


<p>Always on time. We use flight tracking technology to be continuously knowledgeable about flight status.</p>

  
  
  
  </div>
 

 <div class="clearfix"></div>



     

    <?php
if ( wp_is_mobile() ) { ?>

  <br /> <br />
      <hr> 
      
      <br /> <br />


<h2 class="text-center"> Ride Benefits </h2>

      <br /> <br />

<div class="col-md-3 boxdes5 bss">
 
<strong>  Guaranteed Punctuality 
</strong>

<p>Receive a free ride if our chauffeur is 5 minutes late!</p>

  
  
   </div>  



<div class="col-md-3 boxdes5 bss">
 
<strong>  cancellation
</strong>

<p>Free of charge cancelation available 24/7 . Cancellation up to 3 hour prior to ride scheduled time.</p>

  
  
   </div>    
   
   
   
   
   <div class="col-md-3 boxdes5 bss">
 
<strong>  affordable rates
</strong>

<p>No hidden fees, pre arrangements all-inclusive rates.</p>

  
  
   </div>    
   
   
   
   
   <div class="col-md-3 boxdes5 bss">
 
<strong>  Free waiting time
</strong>

<p> we offer complementary waiting time up to 60 minutes in airports & Seaports and 15 minutes  on all other pickup locations
</p>

  
  
   </div>    


  <div class="clearfix"></div>



<?php } ?>




 
 



<div class="col-md-1"></div>
      
      
      
      
      
      
      
       
       
       
       
       
       
       </section>
       
       <div class="clearfix"></div>
       
       
       
       <?php
if (! wp_is_mobile() ) { ?>


       
       <div class="section3">
       
       
       <h2 class="edge-title text-center" style="margin-top: 15%;">  ENJOY THE MOST AND LEAVE THE REST TO US </h2>
       
       
       
       </div>
       
       <?php } ?>
       
       
       
            
            
         <?php get_footer(); ?>
 
 
 