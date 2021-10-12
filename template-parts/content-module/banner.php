
        <?php if(have_rows('banner_slider')):

             while(have_rows('banner_slider')): the_row(); 
 
                    $bnrslidimg = get_sub_field('banner_slide_image');
                    $bnrsliditems = get_sub_field('slide_item');

                ?>
                
                <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo $bnrslidimg;?>" data-natural-width="3000" data-natural-height="2000">

                    <div class="s-home__content">

                        <div class="s-home__slider">

                            <?php foreach($bnrsliditems as $bnrsliditem): $i++;?>

                                <div class="s-home__slide s-home__slide--<?php echo $i;?>">
                                    <div class="row">
                                        <div class="column large-12 s-home__slide-text">
                                            <h2>
                                                <?php echo str_replace(array('<p>','</p>'),'',$bnrsliditem['slide_item_title']);?>
                                            </h2>
                                            <p><?php echo $bnrsliditem['slide_item_info'];?></p>
                                        </div>
                                    </div>
                                </div> <!-- end s-home__slide -->
                                

                            <?php  endforeach;?>

                        </div> <!-- end s-home__slider -->

                    </div> <!-- end s-home__content -->

                    <div class="s-home__nav-arrows">
                        <div class="s-home__arrow-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"/></svg>
                        </div>
                        <div class="s-home__arrow-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                        </div>
                    </div> <!-- end s-home__nav-arrows -->

                    <div class="s-home__line"></div>

                </section> <!-- end s-home -->
                

            <?php endwhile;

              endif;?>
