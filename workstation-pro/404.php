<?php if ($_GET['404']=='true') { ?>


<?php get_header(); ?>

<style type="text/css" media="screen">

html,body {
	overflow: hidden;
	height: 100%;
}
body > div {
	height: 100%;
}
.error404 .site-header,.error404 .site-footer {
	display: none;
}


.buttons {
	position: relative;
	top: 50%;
	transform: translateY(-50%);
}

#container {
  background: #0f0f0f;
  width: 100%;
  height: 100%;
  position: relative;
  text-align: center;
}

#lost {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 400;
  font-size: 250px;
  color: #b7b9c2;
  text-transform: uppercase;
  letter-spacing: 30px;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 645px;
  height: 180px;
  margin-left: -322px;
  margin-top: -190px;
  text-align: center;
  -webkit-font-smoothing: antialiased;
  
  animation: blur 12s linear forwards;
  animation-iteration-count: 1;
  
  /* Tool: http://www.3dcsstext.com */
  text-shadow:0px 0px 0 rgb(236,236,236),-1px 1px 0 rgb(216,216,216),-2px 2px 0 rgb(197,197,197),-3px 3px 0 rgb(177,177,177),-4px 4px 0 rgb(158,158,158),-5px 5px 0 rgb(138,138,138),-6px 6px 0 rgb(119,119,119), -7px 7px 0 rgb(100,100,100),-8px 8px 7px rgba(0,0,0,0.1),-8px 8px 1px rgba(0,0,0,0.5),0px 0px 7px rgba(0,0,0,.2);
    
}

/* Blur effect for webkit browsers */
@keyframes blur {
	0%{
	  -webkit-filter: blur(20px);
	  opacity: 1;
	}
	
	70%{
    -webkit-filter: blur(0px);
    opacity: .8;
	}
  
  75%{
    -webkit-filter: blur(0px);
	}

	100%{
		-webkit-filter: blur(3px);
		opacity: 0;
	}
}
</style>



<div id="container">
  <h1 id="lost">Lost?</h1>
  
  <div class="buttons">
	  <a href="<?=home_url()?>" class="button">Go Home</a>
	  <a href="<?=get_permalink(8)?>" class="button">Our Work</a>
  </div>
</div>
	
<?php get_footer()?>





<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.9.6/TweenMax.min.js"></script>
<script>
	// Set properties
TweenMax.set("#container", {perspective: 400});
TweenMax.set("#lost", {rotationY:-30,rotationX: 30,  rotation: -20, scale: 0.5, opacity: 0}); 

// Init timeline
var tl = new TimelineMax({repeat: 0});

tl.to("#lost", 12, { scale: 7.1, ease: Circ.easeIn})
.to("#lost", 1.5, { opacity: 1, ease: Linear.easeNone}, "-=12")
.to("#lost", 12, { rotationY: 0, rotationX: 10, rotation: 20}, "-=12");

</script>



<? } ?>