<?php
/**
* Template Name: Strategy Page
*/
get_header(); ?>

<div class="canvas-contain">
	<canvas id="c" width="500" height="400"></canvas>
</div>
  <div class="strategy-header">Let's simplify complicated</div>
  <div class="strategy-contain">
  	<div class="intro-block">
  		<h1>Collaborate. Ideate. Execute. Iterate.</h1>
  		<p>Generating long-term results for your brand is an iterative process. Designers, engineers, and marketing strategists collaborate launching a digital strategy concentrating on user experience (UX) and founded on market research and analytics. We gain insights through user analytics and make adjustments optimizing user flow to meet business objectives. Effective, successful strategy is an ongoing dedicated process.</p>
      <p>Strategy is at the core of everything we do at Activator Studios. It's how we create value for you and us. Collaboration relies on it. Execution depends on it. It’s at the core of our collaborative design process.</p>
  	</div>
  </div>
	<div class="strategy-research">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/strategy/research-icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Research</h3>
			<p>A comprehensive understanding of your users unlocks ways your products will best meet their needs. Competitive reviews, market segmentation analysis, and data analytics propel design, content, and technology strategies centered around your users. User personas developed from informed research motivate design decisions. Reaching and growing your target demographics require a continuous diligent research process.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="strategy-competitive">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/strategy/competitive-icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Competitive Analysis</h3>
			<p>Whether developing a new brand or fortifying an established brand, competitor analysis is vital in a competitive landscape. We analyze where and how competitors succeed and the opportunities left behind. Competitor analysis offers essential input in constructing profitable digital marketing strategies as well as finding keywords leveraging SEO. We also monitor competitor rankings in specific metrics to gain insights on trends in your industry.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="strategy-branding">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/strategy/branding-icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Branding</h3>
			<p>A brand strategy that works is the culmination of successful design and content strategies. Your brand is your biggest asset. Our design team creates a visual direction supporting your brand identity. Brand identity is the aesthetics that build and promote your brand. Your color palette, graphic design and placement, and type fonts are all inspired by your brand. Brand-focused content strategy is meaningful, concise copy, memorable taglines, and content creation with purpose.</p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="strategy-insights">
		<div class="one-fourth first">
			<img src="http://activatorstudios.com/wp-content/themes/workstation-pro/images/strategy/insights-icon.svg">
		</div>
		<div class="three-fourths">
			<h3>Active Insights</h3>
			<p>Active Insights is an essential tool for guiding site edits and tweaks after launch increasing conversions. Know who is interested in you. Know where they're going. Where they've been. Where they haven't been. Vital user information is presented in a simple report ensuring content and design strategies are sound. Meeting the ever-changing needs of your users can be challenging. It doesn't have to be.</p>
		</div>
		<div class="clearfix"></div>
	</div>

<script>
/* http://codepen.io/bali_balo/pen/PqVYxY */
var opts = {
	radius: 150,
	segCount: 400,
	endAngle: -Math.PI * 18,
	baseRotSpeed: 5,
	transformedRotSpeed: 1,
	transSpeed: 2,
	transEasing: function(t) { return (t < .5) ? 4 * t * t * t : 1 - 4 * (t = 1 - t) * t * t; },
	randMinSegSize: 10,
	randMaxSegSize: 40
};

var c = document.getElementById('c'),
	ctx = c.getContext('2d');

function resize()
{
	c.width = c.offsetWidth;
	c.height = c.offsetHeight;
	ctx.translate(c.width * .5, c.height * .5);
	ctx.strokeStyle = 'white';
	ctx.lineCap = 'round';
	ctx.lineJoin = 'round';
	ctx.shadowBlur = 10; 
	ctx.shadowColor = "yellow";
}

window.addEventListener('resize', resize);
resize();

function rotateX(p, a)
{
	var d = Math.sqrt(p[2] * p[2] + p[1] * p[1]),
		na = Math.atan2(p[1], p[2]) + a;
	return [p[0], d * Math.sin(na), d * Math.cos(na)];
}
function rotateY(p, a)
{
	var d = Math.sqrt(p[2] * p[2] + p[0] * p[0]),
		na = Math.atan2(p[2], p[0]) + a;
	return [d * Math.cos(na), p[1], d * Math.sin(na)];
}

function loxo(radius, angle, segments)
{
	var r = [];
	for (var i = 0; i < segments; i++)
	{
		var a = Math.PI * i / segments,
			c = Math.cos(a),
			s = Math.sin(a);
		var progress = (c + 1) * .5;
		var ay = progress * angle;
		r.push([radius * s * Math.cos(ay), radius * c, radius * s * Math.sin(ay)]);
	}
	return r;
}

function random(a, b) { return a + Math.random() * (b - a); }
function between(n, m, M) { return n >= m && n <= M; }
function randomPath(n, limit, minDist, maxDist)
{
	var r = [];
	var previous = [random(-limit, limit), random(-limit, limit), random(-limit, limit)];
	for (var i = 0; i < n; i++)
	{
		var p;
		do
		{
			var dist = random(minDist, maxDist);
			var angleA = random(0, Math.PI * 2);
			var angleB = random(0, Math.PI * 2);
			var tmp = dist * Math.sin(angleA);
			p = [previous[0] + dist * Math.cos(angleA), previous[1] + tmp * Math.cos(angleB), previous[2] + tmp * -Math.sin(angleB)];
		} while (!(between(p[0], -limit, limit) && between(p[1], -limit, limit) && between(p[2], -limit, limit)));
		r.push(p);
		previous = p;
	}
	return r;
}
var basePoints = loxo(opts.radius, opts.endAngle, opts.segCount);
var transformedPoints = randomPath(opts.segCount, opts.radius, opts.randMinSegSize, opts.randMaxSegSize);

function lerp(p1, p2, t)
{
	return [p1[0] + t * (p2[0] - p1[0]), p1[1] + t * (p2[1] - p1[1]), p1[2] + t * (p2[2] - p1[2])];
}

function getPoint(i, transform, rotY, rotX)
{
	var bp = basePoints[i],
		tp = transformedPoints[i],
		p = lerp(bp, tp, transform);
	return rotateX(rotateY(p, rotY), rotX);
}
var previousT = Date.now() * 1e-3;
var rot = 0;
var previousTdir;
function loop()
{
	requestAnimationFrame(loop);
	ctx.clearRect(-c.width * .5, -c.height * .5, c.width, c.height);
	var t = Date.now() * 1e-3;
	var deltaT = t - previousT;
	previousT = t;
	var transform = opts.transEasing((Math.sin(t * opts.transSpeed) + 1) * .5);
	// Detect when we change of "transform direction"
	var tdir = (Math.cos(t * opts.transSpeed) > 0) ? 1 : -1;
	if(previousTdir !== tdir)
	{
		previousTdir = tdir;
		// Generate new points
		if(tdir == 1)
			transformedPoints = randomPath(opts.segCount, opts.radius, opts.randMinSegSize, opts.randMaxSegSize);
	}
	var rotSpeed = opts.baseRotSpeed + transform * (opts.transformedRotSpeed - opts.baseRotSpeed);
	rot += deltaT * rotSpeed;
	var rotX = -.5;
	ctx.beginPath();
	var first = getPoint(0, transform, rot, rotX);
	ctx.moveTo(first[0], first[1]);
	var previous = getPoint(1, transform, rot, rotX);
	for (var i = 2, l = opts.segCount - 1; i < l; i++)
	{
		var p = getPoint(i, transform, rot, rotX);
		var xc = (previous[0] + p[0]) * .5;
		var yc = (previous[1] + p[1]) * .5;
		ctx.quadraticCurveTo(previous[0], previous[1], xc, yc);
		previous = p;
	}
	var last = getPoint(opts.segCount - 1, transform, rot, rotX);
	ctx.quadraticCurveTo(previous[0], previous[1], last[0], last[1]);
	ctx.stroke();
}
requestAnimationFrame(loop);
</script>
<?php get_footer(); ?>

