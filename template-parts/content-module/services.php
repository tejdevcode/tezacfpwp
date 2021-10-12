<section id="services" class="s-services target-section s-dark">

        <?php if(have_rows('services')):?>

            <?php while(have_rows('services')): the_row();?>

                <?php get_template_part( 'template-parts/content', 'flexible-section-head' ); ?>    

                <div class="row block-large-1-3 block-medium-1-2 block-tab-full services-list">
                    
                    <?php if(have_rows('service_column')): 

                        while(have_rows('service_column')): the_row();

                            $service_col_title = get_sub_field('service_cloumn_title');
                            $service_col_txt = get_sub_field('service_column_text');

                            ?>
                            <div class="column services-item" data-aos="fade-up">

                                <h5><?php echo $service_col_title;?> </h5>
                                <p><?php echo str_replace(array('<p>','</p>'),'',$service_col_txt);?></p>

                        </div> <!-- end services-item -->

                        <?php 
                    endwhile;
                endif; ?>

            </div> <!-- end services-list -->



        <?php endwhile; ?>

    <?php endif; ?>


</section> <!-- end s-services -->