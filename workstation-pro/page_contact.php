<?php
/**
* Template Name: Contact Page
*/
get_header(); ?>
<link rel="stylesheet" href="http://activatorstudios.com/wp-content/themes/workstation-pro/css/font-awesome.min.css">

 <main class="content"> 
 	<div class="contact-container">
		<div class="contact-header">
			<h1>Let's Make Your Business So Much Better</h1>
			<p><b>For general inquiries</b>, you can reach us at <a href="mailto:hello@activatorstudios.com">hello@activatorstudios.com</a>, and we'll get in touch within one business day. <b>To talk about a project</b>, reach out to <a href="mailto:jkolodner@activatorstudios.com">jkolodner@activatorstudios.com</a>, and he'll be in touch within one business day.</p>
		</div>
		<div class="contact-contain">
			<?php echo do_shortcode('[contact-form-7 id="251" title="Contact Page Form" html_class="use-floating-validation-tip"]');?>
		</div>
	</div>
</main>

<?php get_footer(); ?>

