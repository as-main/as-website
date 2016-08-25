<?php get_header(); ?>

	<section class="section section-hero" data-background="#000000">
		<div class="wrap hero-container">			
			<h1><span class="line">A Web Design and</span>
				<span class="line">Digital Marketing</span>
				<span class="line">Studio</span>
			</h1>
		</div>
		<div class="hero-canvas" id="canvas"></div>
	</section>
	
	<section class="section-mission">
		<div class="wrap section-container">
<!-- 			<div class="as-x"></div> -->
			<h2 class="line">Mission Statement</h2>
			<h3 class="line">Your brand. Your users. We can help.</h3>
			<p class="line">We create web design solutions that engage users, refine and enhance brand identities, and support your business objectives.</p>
		</div>
	</section>
	
	<section class="section section-strategy" data-background="#91d4d4">
		<div class="section-container">
			<div class="text">
				<h2>Dominate your industry.</h2>
				<h3>Know the Lay of the Land.</h3>
				<p>Activator Studios executes comprehensive market research at the onset of every project. We gain valuable insight into where you fit in presently and discover opportunities.</p>
				<h3>Identify Competitors.</h3>
				<p>Our competitive analysis uncovers what and who you're up against. We identify competitor keyword rankings, AdWords spends, and a realistic projection of short and long-term gains.</p>
				<h3>Path to Victory.</h3>
				<p>Activator Studios executes digital marketing and branding strategies focused on your objectives. We monitor your analytics to optimize our strategies and create transparent reports showing results.</p>
				<a href="<?=get_permalink(61)?>" class="button">Learn More</a>
			</div>
			<div class="graphic">
				 <video id="video" class="video-js" preload="auto" width="640" height="264"
  poster="<?=get_stylesheet_directory_uri()?>/vids/dominate-poster.jpg" muted>
				    <source src="<?=get_stylesheet_directory_uri()?>/vids/domainate-your-industry.mp4" type='video/mp4'>
				  </video>
			</div>
		</div>
	</section>
	
	<section class="section section-content" data-background="#EDF3F1">
		<span class="section-content-trigger"></span>
		<div class="section-container">
			<div class="text">
				<h2>Connect with your customers.</h2>
				<h3>More Than a Logo.</h3>
				<p>Brand identity goes beyond your logo. The voice and tone of your content allows your audience to connect with your brand. We create meaningful, consistent content focused on your user needs.</p>
				<h3>Because You Should Be Heard.</h3>
				<p>You are an expert in your field. Share your know-how. Become a resource. Bridge the gap. From blogging to whitepapers, content is a platform in showing users that you’re an industry leader.</p>
				<h3>Going Beyond Your Site.</h3>
				<p>Content doesn’t begin and end on your site. Getting published on other industry mediums expands your audience while giving your brand notoriety. Let’s reach out. Your industry values your knowledge.</p>
				<a href="<?=get_permalink(51)?>" class="button">Learn More</a>
			</div>
			<div class="graphic">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/bubbles-both.svg')?>
			</div>
		</div>
	</section>
	
	<section class="section section-marketing" data-background="#a4bfbf">
		<span class="section-marketing-trigger"></span>
		<div class="section-container">
			<div class="text">
				<h2>Gain a Competitive Advantage.</h2>
				<h3>In a Sea of Blue, Be Red.</h3>
				<p>Standout among your competitors through a sound SEO strategy. Climbing the crowded ranks of a Google search requires content marketing, site optimization, and monitoring. We get it. We do it.</p>
				<h3>Paid or Organic? Do Both.</h3>
				<p>Give users a clear path to your site through high-ranking paid ads complimenting your SEO. Seeing your site in multiple places on a search communicates your site as an authority in the industry.</p>
				<h3>Where’d the money go?</h3>
				<p>Activator Studios creates user-friendly reports showing where your dollars are being spent and the value you are getting from your digital marketing. We respect your budget and optimize every dollar.</p>
				<a href="<?=get_permalink(56)?>" class="button">Learn More</a>
			</div>
			<div class="graphic">
				
				<div id="chart">
				  <ul id="bars">
				    <li><div data-percentage="20" class="bar"></div></li>
				    <li><div data-percentage="40" class="bar"></div></li>
				    <li><div data-percentage="60" class="bar"></div></li>
				    <li><div data-percentage="80" class="bar"></div></li>
				    <li><div data-percentage="100" class="bar"></div></li>
				    <li><div data-percentage="150" class="bar last"></div></li>
				  </ul>
				</div>
			
			</div>
		</div>
	</section>
	
	
	<section class="section section-design" data-background="#c0cccc">
		<span class="section-design-trigger"></span>
		<div class="section-container">
			<div class="text">
				<h2>Bring Sexy Back? It Never Left.</h2>
				<h3>In a Sea of Blue, Be Red</h3>
				<p>Responsive design is no longer optional. Your site must look and perform optimally on any device, platform, and browser. We format and test your site in several resolutions ensuring you always look your best.</p>
				<h3>It’s Alluring. What About Performance?</h3>
				<p>Web performance optimization (WPO) is as important as aesthetics. Data shows that faster site interaction speeds increase user engagement and satisfaction. We create happiness through optimized web designs.</p>
				<h3>It’s Yours. Love it.</h3>
				<p>Activator Studios does not create template designs. Your design will be unique to you and tailored to your brand. We collaborate with you throughout the design process ensuring you love your design as we do.</p>
				<a href="<?=get_permalink(54)?>" class="button">Learn More</a>
			</div>
			<div class="graphic">
				<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/graphic-sexy.svg')?>
			</div>
		</div>
	</section>
	
	
	
	<section class="section-services">
		<h3>Skills that Pay the Bills</h3>
		<div class="section-container">
			<div class="service">
				<div class="icon">
					<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/icon-adwords-color.svg')?>
				</div>
				<div class="service-text">
					AdWords
				</div>
			</div>
			<div class="service">
				<div class="icon">
					<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/icon-design-color.svg')?>
				</div>
				<div class="service-text">
					Design
				</div>
			</div>
			<div class="service">
				<div class="icon">
					<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/icon-seo-color.svg')?>
				</div>
				<div class="service-text">
					SEO
				</div>
			</div>
			<div class="service">
				<div class="icon">
					<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/icon-content-color.svg')?>
				</div>
				<div class="service-text">
					Content
				</div>
			</div>
			<div class="service">
				<div class="icon">
					<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/icon-video-color.svg')?>
				</div>
				<div class="service-text">
					Video
				</div>
			</div>
		</div>
		<a href="<?=get_permalink(14)?>" class="button">HOW CAN WE HELP?</a>
	</section>
	
	
	<?php if ($_GET['pre']=='true') { ?>
	
		<div class="section-work">
			
			<img src="<?=get_stylesheet_directory_uri()?>/images/work/portfolio-item-as.jpg" alt="" />

			<img src="<?=get_stylesheet_directory_uri()?>/images/work/portfolio-item-as.jpg" alt="" />

		</div>
	
	<? } else { ?>
	
	<div class="work-items">
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-boldvan.jpg" class="work-item work-boldvan">
			<div class="work-desc">
				BOLD VAN
			</div>
		</a>
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-boom.jpg" class="work-item work-boom">
			<div class="work-desc">
				BOOM Designs
			</div>
		</a>
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-media-militia.jpg" class="work-item work-media-militia">
			<div class="work-desc">
				Media Militia
			</div>
		</a>
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-prankbot.jpg" class="work-item work-prankbot">
			<div class="work-desc">
				PrankBot
			</div>
		</a>
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-alpha-edi.jpg" class="work-item work-alpha-edi">
			<div class="work-desc">
				AlphaEDI
			</div>
		</a>
		<a href="<?=get_stylesheet_directory_uri()?>/images/work-focused-ec.jpg" class="work-item work-focused-ec">
			<div class="work-desc">
				Focused E-commerce
			</div>
		</a>
	</div>
	
	<?php } ?>
	
	
	<section class="section section-testimonials" data-background="#f1f1f1">
		<div class="section-container">
			<div class="text">
				<h2>We work with some great people.</h2>
				<p>"Activator Studios became an integral part of our company from day one. They quickly and comprehensively grasped our product--and a challenging one: electronic data interchange--and helped galvanize our brand. Activator comes to the table with solutions that we know have been vetted and thought through by multiple team members.
				<p>What we like most about having Activator as part of our team is that when we reach out, they are there. Every time."</p>
				<p>- Larry M., BOLD VAN</p>
				<a href="<?=get_permalink(14)?>" class="button">Learn More</a>
			</div>
		</div>
		<div class="graphic">
			<?php echo file_get_contents(get_stylesheet_directory_uri().'/images/graphic-larry.svg')?>
		</div>
	</section>
	

	<section class="section-home-contact">
		<?php get_template_part('part','cta');?>		
	</section>


<?php get_footer(); ?>