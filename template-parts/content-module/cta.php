

    <section class="s-cta ss-dark">

        <?php while(have_rows('cta_hosting')): the_row(); ?>

            <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column">
                <?php if(get_sub_field('cta_title')): ?>
                <h2 class="section-desc">
                    <?php echo get_sub_field('cta_title');?>
                </h2>
            <?php endif;?>
            </div>
        </div> <!-- end heading-block -->

        <div class="row cta-content" data-aos="fade-up">
            <div class="column">

                <?php if(get_sub_field('cta_info')): ?>

                    <p><?php echo str_replace(array('<p>','</p>'),'',get_sub_field('cta_info'));?></p>

                <?php endif;
                if(get_sub_field('cta_button')): 
                    $ctabtn = get_sub_field('cta_button');
                    ?>

                    <a href="<?php echo $ctabtn['url']; ?>" class="btn h-full-width">
                        <?php echo $ctabtn['title']; ?></a>

                <?php 
            endif;?>
            </div>
        </div> <!-- end ad-content -->

    <?php endwhile;?>

    </section> <!-- end s-cta -->