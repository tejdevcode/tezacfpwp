 <section id="about" class="s-about target-section">

    <?php while(have_rows('about')): the_row();

        get_template_part( 'template-parts/content', 'flexible-section-head' ); 

        if(get_sub_field('work_process_title')):
           ?>

           <div class="row">
            <div class="column" data-aos="fade-up">

                <h4><?php echo get_sub_field('work_process_title');?></h4>

            </div>
        </div>

    <?php endif;?>

    <div class="row block-large-1-4 block-medium-1-2 block-mob-full process-block">

        <?php while(have_rows('work_process_column')): the_row();

            echo '<div class="column process" data-aos="fade-up">';

            if(get_sub_field("work_process_column_title")): 

                echo '<h6>'.get_sub_field("work_process_column_title") .'</h6>';

                endif;


            if(get_sub_field("work_process_info")):

                echo '<p>'.get_sub_field("work_process_info").'</p>

            </div>';

        endif; 
    endwhile;?>

    </div><!-- end process-block -->

        <div class="row">
            <div class="column" data-aos="fade-up">

                <?php if(get_sub_field('team_title')):?>

                    <h4><?php echo get_sub_field('team_title');?></h4>

                <?php endif;?>

            </div>
        </div>

        <div class="row block-large-1-4 block-medium-1-3 block-tab-1-2 block-500-stack team-block">

            <?php while(have_rows('team_column')): the_row();

                ?>

                <div class="column team-member" data-aos="fade-up">
                <div class="team-member__pic">

                    <?php if(get_sub_field('mamber_profile_image')):

                        echo '<img src="'.get_sub_field('mamber_profile_image').'" alt="">';

                    endif;?>    
                </div>
                <div class="team-member__info">

                    <?php if(get_sub_field('mambar_name')):

                        echo '<p class="team-member__name">';

                                get_sub_field('mambar_name');

                                if(get_sub_field('mambar_post')):

                                echo '<span>'.get_sub_field('mambar_post').'</span>

                            </p>';
                    endif; endif;?> 

                   
                    
                    <ul class="team-member__social">

                        <?php while(have_rows('mambar_social')): the_row();

                            if(get_sub_field('social_link')):

                            echo'<li><a href="'.get_sub_field('social_link').'">'.get_sub_field('social_icon').'</a></li>';

                        endif; endwhile;?>
                    </ul>
                </div>
            </div>


            <?php endwhile;?>
        </div> <!-- end team-block -->

    <?php endwhile;?>



</section> <!-- end s-about -->

