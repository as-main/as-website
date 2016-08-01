<?php get_header(); ?>


	
	<h1 class="page-title-desc">
		<div class="wrap">
			Services | <span>Digital Products That Inspire</span>
		</div>
	</h1>


	<div class="service-items">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('service_items') ):
		
		
		
 		// loop through the rows of data
   		while ( have_rows('service_items') ) : the_row();

   		// vars
		$name = get_sub_field('service_item_name');
		$name_lower = strtolower($name);
		$link = get_sub_field('service_item_link');
		$desc = get_sub_field('service_item_description');
		$image = get_sub_field('service_item_image');
    		?>
    		
    		
			<a href="<?php echo $link; ?>" class="service-item" style="background-image: url(<?php echo $image['url']; ?>);background-size: cover;">
				<div class="wrap">
					<h2><?php echo $name; ?></h2>
					<p><?php echo $desc; ?></p>
				</div>
			</a>
    		
    		
	<?php

    endwhile;

	endif;

	?>
	
	</div>
	
</div>


<?php get_footer(); ?>