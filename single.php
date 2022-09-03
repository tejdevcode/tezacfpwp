<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package acfwp
 */

get_header();
?>

	<!-- blog content
    ================================================== -->
    <div class="blog-content">

        <div class="row blog-post-wrap">
            <div class="column large-12">

                <article class="blog-post">

                    <div class="blog-post__header">
                    	<?php
                    	if ( is_singular() ) :
                    		the_title( '<h1 class="blog-post__title">', '</h1>' );
                    	else :
                    		the_title( '<h2 class="blog-post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    	endif;?>
                        
                        <div class="blog-post__meta">

                            <div class="blog-post__date"><?php echo acfwp_posted_on();?></div>
          
                            <p class="blog-post__cat">
                                <a href="category.html">Design</a>
                                <a href="category.html">Frontend</a>
                                <a href="category.html">Featured</a>
                            </p>
          
                         </div>
                    </div> <!-- blog-post__header -->

                    <div class="blog-post__thumb">
                        <?php acfwp_post_thumbnail(); ?>
                    </div>  <!-- blog-post__thumb -->

                    <div class="blog-post__content lead drop-cap">

                    	<?php
                    	the_content(
                    		sprintf(
                    			wp_kses(
                    				/* translators: %s: Name of current post. Only visible to screen readers */
                    				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'acfwp' ),
                    				array(
                    					'span' => array(
                    						'class' => array(),
                    					),
                    				)
                    			),
                    			wp_kses_post( get_the_title() )
                    		)
                    	);

                    	wp_link_pages(
                    		array(
                    			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acfwp' ),
                    			'after'  => '</div>',
                    		)
                    	);
                    	?>

                    	<p class="blog-post__tags">
                    		<?php
                    		$posttags = get_the_tags();
                    		if ($posttags) { ?>
                            <span class="blog-post__tags-title">Post tags</span>
                            <span class="blog-post__tag-list">
                            	
                            		<?php foreach($posttags as $tag) {
                            			echo '<a href="#0">'.$tag->name . '</a>'; 
                            		}
                            	}
                            	?>
                            </span>
                        </p> 

                    </div> <!-- end blog-post__content -->

                </article> <!-- blog post -->

            </div> <!-- column -->
        </div> <!-- end blog-post-wrap -->

        <div class="blog-post-nav-wrap">
            <div class="row blog-post-nav">
                <div class="column large-6 tab-12 blog-post-nav__prev">
                    <?php  $prev_post = get_adjacent_post(false, '', true);
                    if(!empty($prev_post)) {
                    	echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '" rel="prev"><span>Prev</span>' . $prev_post->post_title . '</a>'; }

                    	?>

                </div>
                <div class="column large-6 tab-12 blog-post-nav__next">
                    <?php 
                    $next_post = get_adjacent_post(false, '', false);
                    if(!empty($next_post)) {
                    	echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '"  rel="next"><span>Next</span>' . $next_post->post_title . '</a>'; }

                    	?>
                </div>
            </div>
        </div> <!-- end blog-post-nav-wrap -->

    </div> <!-- end blog-content -->



	

<?php
get_footer();
