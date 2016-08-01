<?php get_header(); 
	
	$pageTitle = get_field('page_title');
	$pageSubTitle = get_field('page_subtitle');
	$pageCopy = get_field('page_copy');
	
?>

	<main class="content">
		
		<div class="company-intro-content">
			
			<?php if ($_GET['pre']=='true') { ?>
			
				<div class="intro-hero">
					<h1>We Do Digital</h1>
					
				</div>
				
				<h2>A digital marketing agency based in Reno, Nevada.</h2>
				<p><?php echo $pageCopy ?></p>
				
			<? } else { ?>
			
				<h1><?php echo $pageTitle ?></h1>
		
				<h2><?php echo $pageSubTitle ?></h2>
		
				<p><?php echo $pageCopy ?></p>
			
			<?php } ?>
		
		</div>


		<h3>Our Team</h3>
		<div class="team-members">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('team_members') ):
		
		
		
 		// loop through the rows of data
   		while ( have_rows('team_members') ) : the_row();

   		// vars
		$image = get_sub_field('team_member_image');
		$name = get_sub_field('team_member_name');
		$quote = get_sub_field('team_member_quote');
		$desc = get_sub_field('team_member_description');
		
    	?>
    	
    	
	<div class="team-member">
    		<img class="team-member-image" src="<?php echo $image['url']; ?>">
		<h4><?php echo $name ?></h4>
		<p class="team-member-desc"><em><?php echo $quote ?></em><br>
		<?php echo $desc ?></p>
		
		<? /*
		<?php
			if( have_rows('social_profiles') ):
		?>
		<div class="social-profiles">
					
		<?php
			while ( have_rows('social_profiles') ) : the_row();
		?>
		
			<li class="<?php?>"></li>
		
		<?php
			$website = get_sub_field('social_web');
			$twitter = get_sub_field('social_twitter');
			
			endwhile;
			endif;
		?>
		</div>
		*/?>
		
		<p>&nbsp;</p>
	</div>


	<?php

    endwhile;

	endif;

	?>
	
	
	</div>
</main>


<?php get_footer(); ?>