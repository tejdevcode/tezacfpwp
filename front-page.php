<?php
get_header();

?>


<main id="primary" class="site-main">


	 <!-- home
        ================================================== -->
	
	<?php get_template_part( 'template-parts/content-module/banner' ); ?>	


	 	<!-- services
    ================================================== -->

	<?php get_template_part( 'template-parts/content-module/services' ); ?>	

	<!-- portfolio
    ================================================== -->
    
	<?php get_template_part( 'template-parts/content-module/portfolio' ); ?>	

	<!-- blog
    ================================================== -->

    <?php get_template_part( 'template-parts/content-module/Journal' ); ?>

    <!-- about
    ================================================== -->

    <?php get_template_part( 'template-parts/content-module/about' ); ?>


    <!-- testimonials
    ================================================== -->

    <?php get_template_part( 'template-parts/content-module/testimonials' ); ?>

    <!-- CTA
    ================================================== -->

    <?php get_template_part( 'template-parts/content-module/cta' ); ?>

     <!-- contact
    ================================================== -->
    <?php //get_template_part( 'template-parts/content-module/contact' ); ?>


</main>


<?php

get_footer();