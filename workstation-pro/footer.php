<?php
	genesis_structural_wrap( 'site-inner', 'close' );
	echo '</div>'; //* end .site-inner or #inner
	
	do_action( 'genesis_before_footer' );
	do_action( 'genesis_footer' );
	do_action( 'genesis_after_footer' );
	
	echo '</div>'; //* end .site-container or #wrap
	
	do_action( 'genesis_after' );
	wp_footer(); //* we need this for plugins
?>

<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>

<?php if(is_front_page()) { ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri()?>/js/objLoader.js"></script>
	<script src="<?=get_stylesheet_directory_uri()?>/js/home-webgl.js"></script>
<?php } ?>

<div class="footer-tracking-codes">
	
	<!-- Google Code for Remarketing Tag -->
	<!--------------------------------------------------
	Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
	--------------------------------------------------->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 935595632;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/935595632/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

</div>



</body>
</html>
