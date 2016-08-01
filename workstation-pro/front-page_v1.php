<?php get_header(); ?>


<section class="section section-work" id="work">
	<div class="wrap">
		<h2>Work</h2>
	</div>
	<div class="work-items wrap">
		<div class="work-item alpha">
			<div class="work-title">AlphaEDI</div>
			<a class="work-link" href="http://alphaedi.com/" target="_blank"></a>
		</div>
		<div class="work-item boldvan">
			<div class="work-title">BOLD VAN</div>
			<a class="work-link" href="http://boldvan.com/" target="_blank"></a>
		</div>
		<div class="work-item boom">
			<div class="work-title">BOOM Designs</div>
			<a class="work-link" href="http://leonardo.boomdesigns.com/" target="_blank"></a>
		</div>
	
	</div>
</section>

<section class="section section-services" id="services">
	<div class="wrap">
		<h2>Services</h2>
	</div>
	<div class="tabs wrap">
	    <ul class="tab-links">
	        <li class="active"><a href="#tab1">Content</a></li>
	        <li><a href="#tab2">Design</a></li>
	        <li><a href="#tab3">Strategy</a></li>
	        <li><a href="#tab4">Development</a></li>
	    </ul>
	
	    <div class="tab-content">
	        <div id="tab1" class="tab active content">
	            <div class="tab-copy">
		            <p>Connecting with your audience through content that shapes your brand while satisfying their needs is crucial in the digital space. We employ a content strategy based on research and analytics, and focused on user behavior and trends. Where business objectives overlap with users’ needs, we find the source of productive and meaningful content.</p>
	            </div>
	        </div>
	
	        <div id="tab2" class="tab design">
	            <div class="tab-copy">
		            <p>We love crafting digital products that are as responsive as they are creative. Responsive design focuses your ideas and products on the behaviors of your users. How your users interact with your products is at the forefront of design strategies at Activator Studios. Your digital product will look fantastic, no matter the screen size, browser preference, and device selection.</p>
	            </div>
	        </div>
	
	        <div id="tab3" class="tab strategy">
	            <div class="tab-copy">
		            <p>Generating long-term results for your brand is an iterative process. Designers, engineers, and marketing strategists collaborate launching a digital strategy concentrating on user experience (UX) and founded on market research and analytics. We gain insights through user analytics and make adjustments optimizing user flow to meet business objectives. Effective, successful strategy is an ongoing dedicated process.</p>
	            </div>
	        </div>
	
	        <div id="tab4" class="tab dev">
	            <div class="tab-copy">
		            <p>Development is often a black box. We strive to educate and remain as transparent as possible in our development process. Our development team works closely with all departments to ensure your business goals are being met as possible. From audits to consulting to full stack implementation, we're here to help.</p>
	            </div>
	        </div>
	    </div>
	</div>
</section>


<section class="section section-team" id="team">
	<div class="wrap">
		<h2>Our Team</h2>
	</div>
	<div class="wrap team-members">
		<div class="team-member adam">
			<div class="title">Adam Hoppe<br>Content Lead</div>
		</div>
		<div class="team-member jon">
			<div class="title">Jonathan Kolodner<br>Director of Strategy & Client Success</div>
		</div>
		<div class="team-member steph">
			<div class="title">Stephanie Mantz<br>Designer/Developer</div>
		</div>
		<div class="team-member james">
			<div class="title">James Jackson<br>Developer/Designer</div>
		</div>
	</div>
</section>


<section class="section section-contact wrap" id="contact">
	<div class="contact-item info">
		<h3>Get in touch</h3>
		<p>
			e: <a href="mailto:info@activatorstudios.com">info@activatorstudios.com</a><br />
			a: PO BOX 33671<br />
			Reno, NV 89533 
		</p>
		<h4>To discuss your project:</h4>
		<p><a href="mailto:JKolodner@activatorstudios.com">JKolodner@activatorstudios.com</a></p>
	</div>
	<div class="contact-item form">
		<?php echo do_shortcode( '[pirate_forms]' ) ?>
	</div>
</section>


<?php get_footer(); ?>