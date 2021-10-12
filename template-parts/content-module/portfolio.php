


<section id="portfolio" class="s-portfolio target-section">

    <?php if(have_rows('portfolio')):

        while(have_rows('portfolio')): the_row(); ?> 

        <?php get_template_part( 'template-parts/content', 'flexible-section-head' ); ?>  

        <div class="row block-large-1-3 block-medium-1-2 block-mob-full folio-list">

                <?php if(have_rows('portfolio_column')):

                  while(have_rows('portfolio_column')): the_row(); $k++;?>

                    <div class="column folio-item" data-aos="fade-up">
                        <a href="#modal-0<?php echo $k;?>" class="folio-item__thumb" data-lity>

                            <img src="<?php echo get_sub_field('portfolio_image');?>" alt="">

                            <span class="folio-item__text"><?php echo get_sub_field('portfolio_image_title');?></span>

                        </a>

                         <!-- Modal Popup
                        =========================================================== -->
                        <?php while(have_rows('portfolio_image_popup')): the_row(); ?>
                        <div id="modal-0<?php echo $k;?>" class="modal-popup lity-hide">
                            
                                <img src="<?php echo get_sub_field('project_image');?>" alt="" />
                            
                            <div class="modal-popup__desc">
                                <h5><?php echo get_sub_field('project_title');?></h5>
                                <p><?php echo get_sub_field('project_intro');?></p>

                                <ul class="modal-popup__cat">

                                <?php while(have_rows('project_tags')): the_row();?>

                                    <li><?php echo get_sub_field('project_tag_name');?></li>
                                    
                                <?php endwhile;?>
                                </ul>
                            </div>
                            <?php if(get_sub_field('project_link')):?>
                                <a href="<?php echo get_sub_field('project_link');?>" class="modal-popup__details">Project link</a>
                            <?php endif;?>
                        </div> <!-- end modal-0<?php echo $k;?> -->

                    <?php endwhile;?>

                    </div> <!-- end folio-item -->

                    

                <?php endwhile;
            endif;?>

        </div> <!-- end folio-list -->




        <?php endwhile;
            endif; ?>

    </section> <!-- end s-portfolio -->


  