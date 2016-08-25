<?php
/**
* Template Name: Digital Marketing Page
*/
get_header(); ?>
<div class="bg" id="marketing"></div>
	<div class="marketing-header">Going beyond acquisition</div>
  <div class="marketing-contain">
  	<div class="intro-block">
  		<h1>Dialing in your paid and organic marketing strategies brings users to your site. Optimizing user journeys makes it affordable.</h1>
  		<p>Boost visibility, gain authority, connect with thought leaders, and increase conversions through a results-driven digital marketing strategy. Digital marketing focused on your users’ behaviors and intentions is a comprehensive strategy including content strategy, user experience (UX), research, social media, and design. We build holistic digital marketing strategies that stand up to the ever-changing algorithms of Google.</p>
  		<p>Partnering original, user-focused content creation with paid acquisition provide a digital marketing foundation that is as nimble as users’ behaviors are challenging.</p>
  	</div>
  </div>
	<div class="marketing-acquisition">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/digital-marketing/acquisition_icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Paid Acquisition</h3>
			<p>Want results from your ad budget? So do we. Ad campaigns are a confluence of keyword and competitor research, content strategy, social media management (SMM), user experience, responsive design, and analytics. We launch pay-per-click (PPC) and social media campaigns to meet planned goals and key metrics. We then continuously analyze data and generate reports looking for opportunities to optimize campaigns.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="marketing-analytics">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/digital-marketing/analytics_icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Analytics and Measurement</h3>
			<p>Data is essential in successful digital marketing. Active Insights analyzes your web site’s data to reinforce marketing strategies and to present opportunities to improve user engagement. Analyzing and measuring how users interact with your site identifies the personas needed for effective digital marketing campaigns. Activator Studios generates user-friendly monthly analytics reports measuring user data and quantifying your digital marketing campaign performance. We tweak and optimize client campaigns based on data and research.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="marketing-contentmarketing">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/digital-marketing/contentmark_icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Content Marketing</h3>
			<p>Activators Studios is a content-first design studio. Goal-oriented content strategy creates cohesive digital marketing across different media channels while strengthening your brand identity. Content is the foundation of digital marketing. Inbound marketing depends on it. SEO and SMM are driven by it. Knowing what to say--and when and where to say it--captures the attention of your targeted audience.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="marketing-seo">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/digital-marketing/seo_icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Search Engine Optimization (SEO)</h3>
			<p>SEO is a cornerstone in deploying comprehensive digital marketing strategies that perform. We pore over user analytics and competitive analysis in generating targeted keywords matching consumer search trends. Understanding users’ search intentions enable purposeful, organic content creation. SEO enhances brand visibility. Joining SEO with paid acquisition, content strategy, and user experience drives conversions.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="marketing-smm">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/digital-marketing/smm_icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Social Media Management (SMM)</h3>
			<p>We have three principles in developing and growing social media connections: promote, interact, and share. Humanizing your relationships on Facebook, Google+, LinkedIn, and Twitter organically creates meaningful relationships with your audience. A successful SMM strategy will not only reach your target audience but will relate to them and gain the attention of innovators and thought leaders in your industry.</p>
		</div>
		<div class="clearfix"></div>
	</div>

<script src="https://rawgithub.com/soulwire/sketch.js/master/js/sketch.min.js"></script>
<script>
/*
Based on Bouncing Balls by Rob Glazebrook
*/
var particles = [],
    particleCount = 80;
    Particle = function(x,y) {
      this.x = x;
      this.y = y;
      this.radius = random(30,10);
      this.rgba = 'rgba('+floor(random(10,50))+','+floor(random(100,130))+','+floor(random(80,255))+','+random(.4,.1)+')';
      this.vx = random(-1,0);
      this.vy = random(-1,0);
      
      // Draw our particle to the canvas.
      this.draw = function(ctx) {
        ctx.fillStyle = this.rgba;
        ctx.beginPath();
        ctx.arc(this.x,this.y,this.radius,0,TWO_PI);
        ctx.fill();
      };
      
      // Update our position.
      this.update = function(ctx) {
        this.x += this.vx;
        this.y += this.vy;
        // Bounce off edges.
        if(this.x + this.radius > ctx.width) {
          this.vx *= -1;
          this.x = ctx.width - this.radius;
        }
        if(this.x - this.radius < 0) {
          this.vx *= -1;
          this.x = this.radius;
        }
        if(this.y + this.radius > ctx.height) {
          this.vy *= -1;
          this.y = ctx.height - this.radius;
        }
        if(this.y - this.radius < 0) {
          this.vy *= -1;
          this.y = this.radius;
        }        
      }
    };

var sketch = Sketch.create({
  setup: function() {
    var i = particleCount;
    while(i--) {
      var p = new Particle(random(0, this.width),random(0, this.height));
      particles.push(p);
    }
  },
  update: function() {
    var i = particleCount;
    while(i--) { 
      particles[i].update(this);
    }
  },
  draw: function() {
    var i = particleCount;
    while(i--) {
      particles[i].draw(this);
    }
  }
});
</script>
<?php get_footer(); ?>

