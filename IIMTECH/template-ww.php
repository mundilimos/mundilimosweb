<section id="wwheader">
<?php include headerww.php; ?>
</section>



<section class="mapandstate">



    <div class="col-md-6">
        <div class="mapimage">
            <!-- map image goes here -->
        </div>
    </div>




    <div class="col-md-6">
   <div class="states">
   <!-- states goes here -->

   </div>
    </div>
</section>



<section id="wwintro">

<h2 class="text-center">
    <?php the_field('wwintroh2') ?>
</h2>

<p class="text-center">
    <?php the_field('wwintrop') ?>
</p>

</section>

<section id="wwservices">


    <!-- one -->
<div class="col-md-3">
    <div class="wwserviceimage">
        <img src="<?php the_field('wwserviceimgsrc1') ?>" class="wwservicesimg"/>
    </div>
    <h3 class="text-center"> <?php the_field('wwservicetitle1') ?> </h3>
    <p class="text-center"> <?php the_field('wwservicep1') ?> </p>
</div>

    <!-- two -->
    <div class="col-md-3">
    <div class="wwserviceimage">
        <img src="<?php the_field('wwserviceimgsrc2') ?>" class="wwservicesimg"/>
    </div>
    <h3 class="text-center"> <?php the_field('wwservicetitle2') ?> </h3>
    <p class="text-center"> <?php the_field('wwservicep2') ?> </p>
</div>

    <!-- three -->
    <div class="col-md-3">
    <div class="wwserviceimage">
        <img src="<?php the_field('wwserviceimgsrc3') ?>" class="wwservicesimg"/>
    </div>
    <h3 class="text-center"> <?php the_field('wwservicetitle3') ?> </h3>
    <p class="text-center"> <?php the_field('wwservicep3') ?> </p>
</div>

    <!-- four -->
    <div class="col-md-3">
    <div class="wwserviceimage">
        <img src="<?php the_field('wwserviceimgsrc4') ?>" class="wwservicesimg"/>
    </div>
    <h3 class="text-center"> <?php the_field('wwservicetitle4') ?> </h3>
    <p class="text-center"> <?php the_field('wwservicep4') ?> </p>
</div>

</section>



<section class="wwsubscribe">
    <!-- subscription goes here -->
</section>



<section class="wwlatestnews">



    <!-- world wide loop goes here -->


</section>










