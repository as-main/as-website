<?php get_header(); ?>

	<section class="section-homehero">
		<h1><span>Build.</span> <span>Iterate.</span> <span>Repeat.</span></h1>
		<div id="canvas"></div>
	</section>
	
	<section class="section-home-work">
		<div class="wrap">
		<h2>Your brand. Your users. We can help.</h2>
		<p>We create web design solutions that engage users, refine and enhance brand identities, and support your business objectives.</p>
		</div>
		<?php
			get_template_part('part','work-items');
		?>
	</section>

	
	<section class="section-home-services">
		<h2>What we do</h2>
		
	<?php 

		if( have_rows('service_items', 10) ): ?>

    <ul>

    <?php while( have_rows('service_items', 10) ): the_row(); // vars
		
		$name = get_sub_field('service_item_name');
		$link = get_sub_field('service_item_link');
		$desc = get_sub_field('service_item_description');
		$image = get_sub_field('service_item_image');?>
    
		
	
		<div class="service-items">
			<a href="<?php echo $link; ?>" class="service-item" style="background-image: url(<?php echo $image['url']; ?>);background-size: cover;">
				<div class="wrap">
					<h3><?php echo $name; ?></h3>
					<p><?php echo $desc; ?></p>
				</div>
			</a>
    		</div>
	
	
    <?php endwhile; ?>

    </ul>

<?php endif; ?>


	</section>
	
	<section class="section-home-contact">
		<?php get_template_part('part','cta');?>		
	</section>

	<div id="activated"></div>


<?php get_footer(); ?>