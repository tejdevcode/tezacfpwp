

<section id="contact" class="s-contact target-section s-dark">
        <?php while(have_rows('contact')): the_row();

            get_template_part( 'template-parts/content', 'flexible-section-head' ); ?>


        <div class="row s-contact__content">

            <div class="column large-7 medium-12">

                <?php if(get_sub_field('contact_title')):?>

                    <h3 class="display-1"><?php echo get_sub_field('contact_title');?> </h3>

                <?php endif;?>

                <div class="s-contact__email-us">

                   <?php if(get_sub_field('contact_button')):
                        $contact_btn = get_sub_field('contact_button'); ?>

                    <a href="mailto:<?php echo $contact_btn['url']?>" class="btn btn--primary h-full-width">
                        <?php echo $contact_btn['title']?></a>
                        
                <?php endif;?>
                </div>

            </div>

            <div class="column large-4 medium-12 s-contact__info-blocks">
                <div class="row">
                    <div class="column large-12 medium-6 tab-12">
                        <div class="s-contact__info-block">
                            
                            <span class="s-contact__info-block-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"/><path d="M11.42 21.814a.998.998 0 001.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"/></svg>
                            </span>
        
                            
                            <?php if(get_sub_field('location_title')):?>

                                <h5><?php echo get_sub_field('location_title');?></h5>

                            <?php endif;
                            if(get_sub_field('location_address')):?>

                            <p><?php echo str_replace(array('<p>','</p>'),'',get_sub_field('location_address'));?></p>

                        <?php endif;?>

                        </div> <!-- end s-contact__info-block -->
                    </div>

                    <div class="column large-12 medium-6 tab-12">
                        <div class="s-contact__info-block">
                            <span class="s-contact__info-block-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M17.707 12.293a.999.999 0 00-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 000-1.414l-4-4a.999.999 0 00-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 000-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 00-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 00.912-.271L17 14.414 19.586 17l-2.006 2.005z"/></svg>
                            </span>

                            <?php if(get_sub_field('phone_title')):?>

                                <h5><?php echo get_sub_field('phone_title');?></h5>

                            <?php endif;
                            if(get_sub_field('contact_info')):?>
        
                            <p><?php echo str_replace(array('<p>','</p>'),'',get_sub_field('contact_info'));?></p>

                            <?php endif;?>

                        </div> <!-- end s-contact__info-block -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end s-contact__info-blocks -->

        </div> <!-- end s-contact__content -->

    <?php endwhile;?>

    </section> <!-- end s-contact -->

