<?php get_header(); ?>


	<h1 class="page-title-desc">
		<div class="wrap"><h1>Our Work</h1></div>
	</h1>
	
	<?php
		//get_template_part('part','header-cta');
	?>
	
	<?php
	// check if the repeater field has rows of data
	if( have_rows('work_items') ):
		
		
		
 		// loop through the rows of data
   		while ( have_rows('work_items') ) : the_row();

   		// vars
		$name = get_sub_field('work_item_name');
		$name_lower = strtolower(get_sub_field('work_item_name'));
		$link = get_sub_field('work_item_link');
		$desc = get_sub_field('work_item_description');
		$image = get_sub_field('work_item_image');
    	?>
    	<?php

    endwhile;

	endif;

	?>
    		
	<?php
		get_template_part('part','work-items');
	?>
	
	
	

<?php get_footer(); ?>
