

<section id="testimonials" class="s-testimonials">

    <?php while(have_rows('testimonials')): the_row();

        get_template_part( 'template-parts/content', 'flexible-section-head' );

        ?>

        <div class="row collapse">

            <div class="column testimonial-slider-outer">

                <div class="testimonial-slider" data-aos="fade-up">

                    <?php while(have_rows('testimonials_item')): the_row();?>

                    <div class="testimonial-slider__slide">
                        <div class="testimonial-slider__author">

                            <?php if(get_sub_field('person_image')): ?>

                                <img src="<?php echo get_sub_field('person_image');?>" alt="Author image" class="testimonial-slider__avatar">

                            <?php endif; ?>

                            <cite class="testimonial-slider__cite">

                                <?php if(get_sub_field('person_name')): ?>

                                    <strong><?php echo get_sub_field('person_name');?></strong>

                                <?php endif; 
                                if(get_sub_field('person_name')):?>

                                <span><?php echo get_sub_field('person_post');?></span>

                            <?php endif; ?>

                            </cite>
                        </div>

                        <p><?php echo str_replace(array('<p>','</p>'),'',get_sub_field('person_comment'));?></p>

                    </div> <!-- end testimonials__slide -->

                <?php endwhile;?>

                </div> <!-- end testimonial slider -->
                
            </div> <!-- end column -->

        </div> <!-- end row -->

    <?php endwhile; ?>

    </section> <!-- end s-testimonials -->
