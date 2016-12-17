<?php



/**



 * Template Name: affiliate Template



 */ 

 

 get_header(); 
 
 ?>

 
 	<?php while ( have_posts() ) : the_post(); ?>

 
<h2 class="edge-title text-center techh2"> Ride Benefits </h2>
 
      <br /> <br />

 

<div class="col-md-3 boxdes5 bss eee">

<h2>  Guaranteed Punctuality 

</h2>

<p> Your time is very important to us, we promise you a <u> FREE RIDE</u> if our chauffeur arrive later then 5 minutes of your scheduled pick up time</p>

</div>  

 
<div class="col-md-3 boxdes5 bss eee">

<h2>  Free Cancellation

</h2>

<p>Up to 3 Hours prior ride schedule time. Available 24/7/365 </p>

</div>    



   <div class="col-md-3 boxdes5 bss eee">

<h2>  affordable rates

</h2>

<p>No hidden fees, pre arrangements all-inclusive  <u> GUARANTEED UNBEATABLE RATES</u>.</p>

 </div>  

  
   <div class="col-md-3 boxdes5 bss eee">

<h2>  Free waiting time

</h2>

<p> Complementary waiting time up to 60 minutes in airports & Seaports and 15 minutes  on all other pickup locations

</p>

 </div>    



<div style="clear:both;"></div>
 

<!-- Technoluxury Section -->



 <h2 class="edge-title text-center techh2" style="margin-top:2em !important;"> TECHNOLUXURY </h2>



<p class="text-center techp">



By incorporating the most advanced intelligent transportation systems (ITS) we offer a state of great comfort and extravagant living beyond comparison. Our industry leading applications aim to deliver precise, reliable and innovative services, enabling our clients to be better informed and make safer, more coordinated, and smarter use of our transport network. In addition to providing standard amenities such as personalized bottled water, mints, box of tissues, hand sanitizer, universal cell phone charger and luxury magazines, our services include unique features such as:



</p>



  <div class="col-md-3 boxdes1 bss bbb"> 



  <!--icon -->



 <i class="fa fa-wifi" aria-hidden="true"></i>


  <strong> ONBOARD WI-FI </strong>



  <p> Our passengers are afforded the convenience of being connected at high speed during their transfers. </p>



  </div>  





  <div class="col-md-3 boxdes2 bss bbb">


  <i class="fa fa-tablet" aria-hidden="true"></i>



  <strong>ONBOARD TABLET</strong>



<p>Anticipating the needs of our clients is what we do best. Every vehicle is equipped with a tablet and Wi-fi.



</p>


  </div>

  <div class="col-md-3 boxdes3 bss bbb"> 



  <i class="fa fa-desktop" aria-hidden="true"></i>


<strong>  GPS VEHICLE TRACKING

</strong>


<p>Our vehicles are equipped with GPS technology so our clients wellbeing can be monitored in real time.</p>

  </div> 

  <div class="col-md-3 boxdes4 bss bbb"> 

  <i class="fa fa-plane" aria-hidden="true"></i>

<strong>  FLIGHT TRACKING



</strong>


<p>Always on time. We use flight tracking technology to be continuously knowledgeable about flight status.</p>


  </div>

<!-- Technoluxury Section -->

<div style="clear:both;"></div>

		<?php endwhile; ?>


<section class="container">


<hr>

<br><br>

<h1 class="text-center ddd">  Welcome to <?php the_field('cityn') ?> Transportation Services  </h1>

<br>

<br>

<div class="row">

<div class="col-md-4 boxdes4 bss ttt"> 

<div class="landerbox">

<i class="fa fa-plane" aria-hidden="true"></i>

<h2 class="text-center"> <?php the_field('tt1'); ?> </h2>

<p>

<?php the_field('lp1'); ?>

</p>

</div>

</div>

<div class="col-md-4 boxdes4 bss ttt"> 

<div class="landerbox">

 

 <i class="fa fa-car" aria-hidden="true"></i>


<h2 class="text-center"> <?php the_field('tt2'); ?> </h2>

<p>

<?php the_field('lp2'); ?>


</p>

</div>

</div>


<div class="col-md-4 boxdes4 bss ttt"> 

<div class="landerbox">

<i class="fa fa-globe" aria-hidden="true"></i>

<h2 class="text-center"> <?php the_field('tt3'); ?> </h2>

<p>

<?php the_field('lp3'); ?>



</p>

</div>

</div>

</div>

</section>

<div class="container">

       <?php the_content(); ?>

</div>
<section class="firstlanding container">
<h2 class="edge-title text-center techh2 dede"> Your Loyal Affiliate in Florida   </h2>
<h4 class="text-center"> Here at Mundi Limos we appreciate everyone that does business with us. To make sure you are happy we consider giving every affiliate a special discount rate that's unbeatable. Mundi has Professional Chauffeurs on stand by waiting for your call to drive your clients safely, comfortably and in style to wherever they need to go. Our Chauffeurs are all trained, drug tested, frequently evaluated and educated to give an outstanding limousine & luxury car Experience in South Florida. 
<br><br>
No Branded Vehicles <strong> - </strong> 24 Hours Live Dispatch <strong> - </strong> Latest Fleet <strong> - </strong> Free Wi-fi <strong> - </strong> Personalized Beverages <strong> - </strong> All Inclusive Rates <strong> - </strong> 24 Hours Invoices <strong> - </strong> Automated Ride Status <strong> - </strong> Vehicle Tracking
</h4>

<br><br>


<a href="/fleet" class="mk-button text-center dede"> View Our Luxury Fleet </a>
<hr><div class="text-center dada">
<h2 class="edge-title text-center techh2 dede"> Top Airports </h2>
<br>
<h4 class="text-center"> Miami International Airport  </h4> <strong class="text-center"> Rides From $85.00 </strong>
<br>
<h4 class="text-center"> Miami Executive Airport   </h4><strong class="text-center"> Rides From $90.00 </strong>
<br>
<h4 class="text-center"> Fort Lauderdale International Airport   </h4> <strong class="text-center"> Rides From $75.00 </strong>
<br>
<h4 class="text-center"> Boca Aviation Airport   </h4> <strong class="text-center"> Rides From $80.00 </strong>
<br>
<h4 class="text-center"> Palm Beach International Airport </h4><strong class="text-center"> Rides From $80.00 </strong>
<br>
 
<h4 class="text-center"> Orlando International Airport  </h4> <strong class="text-center"> Rides From $85.00 </strong>
<br> 
<br> </div>
</section>
<div style="clear:both;"></div>
<hr> 


<?php get_footer(); ?>

