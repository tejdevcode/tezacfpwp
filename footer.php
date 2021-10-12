<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acfwp
 */

?>


 <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="row">
        	<div class="column large-4 medium-6 w-1000-stack s-footer__social-block">
        		<ul class="s-footer__social">        			

        			<?php while(have_rows('footer_social_links', 'option')): the_row();

        				while(have_rows('mambar_social')): the_row();

                            if(get_sub_field('social_link')):

                            echo'<li><a href="'.get_sub_field('social_link').'">'.get_sub_field('social_icon').'</a></li>';

                    		endif;
                       endwhile;
                   endwhile;?>

        		</ul>
            </div>

            <div class="column large-7 medium-6 w-1000-stack ss-copyright">

            	<?php if(get_field('copy_right', 'option')):

            		$copy_right = get_field('copy_right', 'option');  ?>

            		<span><?php echo $copy_right;?></span> 

            	<?php endif;

            	if(get_field('design_by', 'option')): 
            		$designby = get_field('design_by', 'option'); ?>

                <span><?php echo str_replace(array('<p>','</p>'),'',$designby); ?></span>

            <?php endif;?>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"/></svg>
            </a>
        </div> <!-- end ss-go-top -->
    </footer>

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
