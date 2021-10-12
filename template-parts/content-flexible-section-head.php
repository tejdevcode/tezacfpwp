
<?php if(have_rows('section_head')): 

	while(have_rows('section_head')): the_row();

		if(get_row_layout() == 'sechion_head_column'):?>

			<div class="row section-head">
				<div class="column large-3 medium-12" data-aos="fade-up">

					<h2><?php echo get_sub_field('section_title');?></h2>
					<p class="desc"><?php echo get_sub_field('section_title_tag');?></p>
					
				</div>

				<div class="column large-8 medium-12 align-x-right" data-aos="fade-up">

					<?php if(get_sub_field('section_head_text')):?>

						<p class="lead"><?php echo str_replace(array('<p>','</p>'),'',get_sub_field('section_head_text'));?></p>

					<?php endif;?>

				</div>
			</div>

		<?php endif;
		 		endwhile;
		  			endif; ?>
