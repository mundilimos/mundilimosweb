<?php
/**
 * Template Name: Internal Template
 */
get_header();
?>

            
            
            
            <!-- slider starts here -->

    <a href="#" class="slick-prev"> <i class=" fa fa-play playleft " aria-hidden="true"></i> </a>




            <ul id="fleetS" class="tab-content" style="padding-bottom: 30px;">







                <li class="fleetSinner active" id="one">

                    <div class="upperfleet">
                        <h3 class="fleeth3"><?php the_field('titlea'); ?>
                        </h3>
                        <p class="text-center">
                            <?php the_field('paraa'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i><?php the_field('counta'); ?>
                        <br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i><?php the_field('counta2'); ?>
                    </div>


                    <div class="imgdivfleet">
                        <img src="<?php the_field('imga'); ?>" class="fleetimg" alt="<?php the_field('titlea'); ?>
					" />
                    </div>

                </li>
                
                
                
                <li class="fleetSinner" id="two">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgb'); ?>" class="fleetimg" alt="<?php the_field('titleb'); ?>
					" />
                    </div>
                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titleb'); ?>
                        </h3>
                        <p>
                            <?php the_field('parab'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i><?php the_field('countb'); ?>
                        <br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i><?php the_field('countb2'); ?>
                    </div>
                </li>




                <li class="fleetSinner" id="three">
                    <div class="">
                        <img src="<?php the_field('imgc'); ?>" class="fleetimg" alt="<?php the_field('titlec'); ?>
					" />
                    </div>
                    <div class="upperfleet">
                        <h3 class="fleeth3"><?php the_field('titlec'); ?>
                        </h3>
                        <p>
                            <?php the_field('parac'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i><?php the_field('countc'); ?>
                        <br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i><?php the_field('countc2'); ?>
                    </div>
                </li>


                <li class="fleetSinner" id="four">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgd'); ?>" class="fleetimg" alt="<?php the_field('titled'); ?>
					" />
                    </div>
                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titled'); ?>
                        </h3>
                        <p>
                            <?php the_field('parad'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 6 <br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 6
                    </div>
                </li>



                <li class="fleetSinner" id="five">
                    <div class="upperfleet">
                        <img src="<?php the_field('imge'); ?>" class="fleetimg" alt="<?php the_field('titlee'); ?>
					" />
                    </div>
                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titlee'); ?>
                        </h3>
                        <p>
                            <?php the_field('parae'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 12 <br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 4
                    </div>
                </li>





                <li class="fleetSinner" id="six">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgf'); ?>" class="fleetimg" alt="<?php the_field('titlef'); ?>
					" />
                    </div>
                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titlef'); ?>
                        </h3>
                        <p>
                            <?php the_field('paraf'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 14<br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 14
                    </div>
                </li>




                <li class="fleetSinner" id="seven">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgg'); ?>" class="fleetimg" alt="<?php the_field('titleg'); ?>
					" />
                    </div>
                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titleg'); ?>
                        </h3>
                        <p>
                            <?php the_field('parag'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 27<br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 37
                    </div>
                </li>




                <li class="fleetSinner" id="eight">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgh'); ?>" class="fleetimg" alt="<?php the_field('titleh'); ?>
					" />
                    </div>
                    <div class="upperfleet">
                        <h3 class="fleeth3"><?php the_field('titleh'); ?>
                        </h3>
                        <p>
                            <?php the_field('parah'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 40<br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 50
                    </div>
                </li>





                <li class="fleetSinner" id="nine">
                    <div class="upperfleet">
                        <img src="<?php the_field('imgi'); ?>" class="fleetimg" alt="<?php the_field('titlei'); ?>
					" />
                    </div>

                    <div class="">
                        <h3 class="fleeth3"><?php the_field('titlei'); ?>
                        </h3>
                        <p>
                            <?php the_field('parai'); ?>
                        </p>
                        <i class="fa fa-male" aria-hidden="true"></i> 55<br>
                        <i class="fa fa-suitcase" aria-hidden="true"></i> 65
                    </div>
                </li>



                
            </ul>


    <a href="#" class="slick-next">

        <i class="fa fa-play playright" aria-hidden="true"></i>

    </a>



            <!-- slider ends here -->
            
            
            
        </div>
    </div>
    </div>
<?php get_footer(); ?>