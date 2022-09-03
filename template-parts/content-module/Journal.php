<section id="blog" class="s-blog target-section s-dark">

    <?php if(have_rows('journal')):

        while(have_rows('journal')): the_row(); 

            get_template_part( 'template-parts/content', 'flexible-section-head' ); ?>

        <?php endwhile;
         endif; ?>


         <!-- Blog Entries -->
        <div class="blog-entries">

            <?php 

            // The Query

            $args = array(
              'post_type' => 'post' ,
              'orderby' => 'date' ,
              'order' => 'DESC' ,
              'posts_per_page' => 3,
              'category' => 'blog' ,
              'paged' => get_query_var('paged'),
              'post_parent' => $parent
          );

            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query -> have_posts() ) {
                    $the_query -> the_post();

                    echo '<article class="blog-entry" data-aos="fade-up">

                    <div class="row blog-entry__header">
                        <div class="blog-entry__avatar"> '.get_the_post_thumbnail().'</div>

                        <div class="column large-9 w-1000-stack blog-entry__title">
                            <h3 class="h2"><a href="'.get_the_permalink().'">'. get_the_title() .'</a></h3>
                        </div>

                        <div class="column large-3 w-1000-stack blog-entry__meta">
                            <span class="blog-entry__date">'.get_the_date().'</span>
                            <span class="blog-entry__byline">By '.get_the_author().'</span> 
                        </div>
                    </div> <!-- end blog-entry__header -->

                    <div class="row">

                    <div class="column large-9 w-1000-stack blog-entry__content">
                        <p>' . substr(get_the_content(),0 , 350) . '... <a href="'.get_the_permalink().'" class="more-link">Read More</a></p>
                    </div>

                    </div>

                    </article> <!-- end blog-entry -->';    
                }
                
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
// no posts found
            } ?>

        </div> <!-- end blog entries -->

</section> <!-- end s-blog -->




        

