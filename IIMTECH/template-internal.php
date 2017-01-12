<?php
/**
 * Template Name: Internal Template
 */




get_header();

?>




    <ul class="nav nav-tabs">
        <!-- 'tabs-right' for right tabs -->
        <li class="active"><a href="#one" data-toggle="tab" aria-expanded="false">SEDAN </a></li>
        <li class=""><a href="#two" data-toggle="tab" aria-expanded="false">PREMIUM </a></li>
        <li class=""><a href="#three" data-toggle="tab" aria-expanded="true">MERCEDES S550 </a></li>
        <li class=""><a href="#four" data-toggle="tab" aria-expanded="false">SUV </a></li>
        <li class=""><a href="#five" data-toggle="tab" aria-expanded="false">STRETCH LIMO </a></li>
        <li class=""><a href="#six" data-toggle="tab" aria-expanded="false"> SPRINTER VAN </a></li>
        <li class=""><a href="#seven" data-toggle="tab" aria-expanded="false"> MINI BUS </a></li>
        <li class=""><a href="#eight" data-toggle="tab" aria-expanded="false">MINI COACH </a></li>
        <li class=""><a href="#nine" data-toggle="tab" aria-expanded="false">MOTOR COACH </a></li>
    </ul>




<div style="clear:both;"></div>






    <div class="backgroundone">

        <!-- Tab panes -->

        <div class="tab-content slick-slider" style="padding-bottom: 30px;">



            <div   class="tab-pane" id="one">



                 
                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titlea'); ?> </h3>
                    <p class="fleetp"> <?php the_field('paraa'); ?> </p>


                    <div class="passengerwrap">

                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt"> <?php the_field('counta'); ?> </span>
                    <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> <?php the_field('counta2'); ?> </span>

              </div>

                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    
                    
                    <br> <img src="<?php the_field('imga'); ?>" class="fleetimg" alt="<?php the_field('titlea'); ?>" />



                <br /><br /><br />


                </div>



            </div>






            <div   class="tab-pane" id="two">




                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titleb'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parab'); ?> </p>



                    <div class="passengerwrap">


                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt"> <?php the_field('countb'); ?> </span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> <?php the_field('countb2'); ?> </span>

</div>

                </div>


                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgb'); ?>" class="fleetimg" alt="<?php the_field('titleb'); ?>" />


                    <br /><br /><br />
                </div>

            </div>





            <div   class="tab-pane" id="three">



                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titlec'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parac'); ?> </p>


                    <div class="passengerwrap">


                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt"> <?php the_field('countc'); ?> </span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> <?php the_field('countc2'); ?> </span>

</div>

                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgc'); ?>" class="fleetimg" alt="<?php the_field('titlec'); ?>" />

                    <br /><br /><br />
                </div>


            </div>




            <div   class="tab-pane" id="four">



                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titled'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parad'); ?> </p>


                    <div class="passengerwrap">


                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt">  6 </span>
                        <br class="visible-xs"> <br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> 6 </span>

                        </div>

                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgd'); ?>" class="fleetimg" alt="<?php the_field('titled'); ?>" />


                    <br /><br /><br />
                </div>

            </div>




            <div   class="tab-pane" id="five">



                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titlee'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parae'); ?> </p>


                    <div class="passengerwrap">


                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt">  12 </span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> 4 </span>

                        </div>

                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imge'); ?>" class="fleetimg" alt="<?php the_field('titlee'); ?>" />

                    <br /><br /><br />


                </div>


            </div>




            <div   class="tab-pane" id="six">




                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titlef'); ?> </h3>
                    <p class="fleetp"> <?php the_field('paraf'); ?> </p>




                    <div class="passengerwrap">

                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt">  14 </span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee">  14 </span>
</div>


                </div>


                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgf'); ?>" class="fleetimg" alt="<?php the_field('titlef'); ?>" />

                    <br /><br /><br />

                </div>

            </div>




            <div   class="tab-pane" id="seven">



                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titleg'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parag'); ?> </p>

                    <div class="passengerwrap">

                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt">  27</span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> 37</span>
                        </div>


                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgg'); ?>" class="fleetimg" alt="<?php the_field('titleg'); ?>" />
                    <br /><br /><br />

                </div>

            </div>


            <div   class="tab-pane" id="eight">



                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titleh'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parah'); ?> </p>


                    <div class="passengerwrap">

                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt"> 40</span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> 50</span>
                </div>

                </div>

                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgh'); ?>" class="fleetimg" alt="<?php the_field('titleh'); ?>" />

                    <br /><br /><br />

                </div>

            </div>


            <div   class="tab-pane" id="nine">


                <div class="col-md-12 fleetinner ">
                    <h3 class="fleeth3"><?php the_field('titlei'); ?> </h3>
                    <p class="fleetp"> <?php the_field('parai'); ?> </p>

                    <div class="passengerwrap">



                    <span class ="uppercase"> PASSENGER CAPACITY </span> <span class="personcountt"> 55 </span>
                        <br class="visible-xs"><br class="visible-xs">
                    <span class ="uppercase"> LUGGAGE CAPACITY </span> <span class="suitecasee"> 65 </span>

                        </div>
                </div>



                <div class="col-md-12 fleetinner  imagebg">
                    <br> <img src="<?php the_field('imgi'); ?>" class="fleetimg" alt="<?php the_field('titlei'); ?>" />

                    <br /><br /><br />

                </div>
                
            </div>











        </div></div>








<?php get_footer(); ?>