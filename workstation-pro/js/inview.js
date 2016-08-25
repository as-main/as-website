
/**
 * author Remy Sharp
 * url http://remysharp.com/2009/01/26/element-in-view-event-plugin/
 * fork https://github.com/zuk/jquery.inview
 */
(function(e){function m(){var b=window.innerHeight;if(b)return b;var f=document.compatMode;if(f||!e.support.boxModel)b="CSS1Compat"===f?document.documentElement.clientHeight:document.body.clientHeight;return b}var n=function(b,f){function e(){null!==a?c=!0:(c=!1,b(),a=setTimeout(function(){a=null;c&&e()},f))}var c=!1,a=null;return e}(function(){var b=window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop,f=b+m(),g=[];e.each(e.cache,function(){this.events&&this.events.inview&&
g.push(this.handle.elem)});e(g).each(function(){var c=e(this),a;a=0;for(var d=this;d;d=d.offsetParent)a+=d.offsetTop;var d=c.height(),k=a+d,d=c.data("inview")||!1,h=c.data("offset")||0,g=a>b&&k<f,l=k+h>b&&a<b,h=a-h<f&&k>f;g||l||h||a<b&&k>f?(a=h?"top":l?"bottom":"both",d&&d===a||(c.data("inview",a),c.trigger("inview",[!0,a]))):!g&&d&&(c.data("inview",!1),c.trigger("inview",[!1]))})},100);e(window).on("checkInView.inview click.inview ready.inview scroll.inview resize.inview",n)})(jQuery);





(function(document, $, undefined ) {

	// https://github.com/lcdsantos/jquery-drawsvg
	// trigger the svg drawing animation when it comes into view
	
	$('.section-design-trigger').one('inview', function (event, visible) {
		if (visible == true) {
			
			var fm_opts     = { delay: 1 },
		    fm_fromOpts = { drawSVG: '0' },
		    fm_toOpts   = { drawSVG: '100% 0', 'visibility': 'visible' },
			fmtl        = new TimelineMax(fm_opts),
		    fm_path     = document.querySelectorAll('#icon-design path'),
		    fm_circle   = document.querySelectorAll('.fm-logo circle');
		
			fmtl.staggerFromTo(fm_path, 0.375, fm_fromOpts, fm_toOpts, 0.375)
		    .to(fm_path, 1, { fill: '#000' });
			
		} else {
			$('.section-design-trigger').unbind('inview');
		}
	});
	
	
	$('.section-content-trigger').one('inview', function (event, visible) {
		if (visible == true) {
			$('.bubble-one,.bubble-two').addClass('isVisible');
		}
	});
	
	$('.section-marketing-trigger').one('inview', function (event, visible) {
		if (visible == true) {
		  //$('#graphic-graph').addClass('isVisible');
		  
		  $("#bars li .bar:not(.last)").each( function( key, bar ) {
		    var percentage = $(this).data('percentage');
		    $(this).animate({
		      'height' : percentage + '%'
		    }, 500);
		  });
		  
		  $("#bars li .bar.last").each( function( key, bar ) {
		    var percentage = $(this).data('percentage');
		    $(this).delay(1200).animate({
		      'height' : percentage + '%'
		    }, 500);
		  });

		}
	});
	
	
	$('.section-strategy .graphic').bind('inview', function (event, visible) {
		videojs("video").ready(function(){
			var myPlayer = this;
			
			if (visible == true) {
				myPlayer.play();
			} else {
				myPlayer.trigger('loadstart');
			}
			
		});
	});
	
	
	
	$('.work-item-container.fec').bind('inview', function (event, visible, topOrBottomOrBoth) {
		if (visible == true) {
			if (topOrBottomOrBoth == 'top') {
				$(this).addClass('isActive');
				$('.work-item-container .highlight').addClass('isActive');
			}
		}
	});
	
	
	$('.work-item-container.alpha').bind('inview', function (event, visible, topOrBottomOrBoth) {
		if (visible == true) {
			if (topOrBottomOrBoth == 'bottom') {
				$('.work-item-container .cart-container').addClass('isActive');
				
				var fm_opts     = { delay: 1 },
			    fm_fromOpts = { drawSVG: '0' },
			    fm_toOpts   = { drawSVG: '100% 0', 'visibility': 'visible' },
				fmtl        = new TimelineMax(fm_opts),
			    fm_path     = document.querySelectorAll('#browser path'),
			    fm_circle   = document.querySelectorAll('#browser .circle');
			
				fmtl.staggerFromTo(fm_path, 0.375, fm_fromOpts, fm_toOpts, 0.375)
			    .to(fm_path, 1, { fill: '#fff' });
			}
		}
	});
	
	
	
	$('.company-intro .cta-button').bind('inview', function (event, visible) {
		$(this).addClass('isActive');
	});
	
	
	
	
	
	
/*
	var tl = new TimelineLite(),
    circle = document.getElementById("logo");
	tl.to(circle, 1, {morphSVG:"#x"}, "+=1")
	.to(circle, 1, {morphSVG:"#logo"}, "+=1");
*/
	  
  
	
})( document, jQuery );





