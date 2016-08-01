<?php get_header(); ?>


<div class="wrap">
	<h1 class="page-title-desc">Our Work | <span>Great work for great clients</span></h1>
	
	<?php
		//get_template_part('part','header-cta');
	?>
</div>
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
