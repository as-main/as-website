( function ( document, $, undefined ) {

	$( 'body' ).addClass( 'js' );

	'use strict';

	var workstation              = {},
		mainMenuButtonClass = 'menu-toggle',
		subMenuButtonClass  = 'sub-menu-toggle';

	workstation.init = function() {
		var toggleButtons = {
			menu : $( '<button />', {
				'class' : mainMenuButtonClass,
				'aria-expanded' : false,
				'aria-pressed' : false,
				'role' : 'button'
				} )
				.append( workstation.params.mainMenu ),
			submenu : $( '<button />', {
				'class' : subMenuButtonClass,
				'aria-expanded' : false,
				'aria-pressed' : false,
				'role' : 'button'
				} )
				.append( $( '<span />', {
					'class' : 'screen-reader-text',
					text : workstation.params.subMenu
				} ) )
		};
		$( '.nav-primary' ).before( toggleButtons.menu ); // add the main nav buttons
		$( 'nav .sub-menu' ).before( toggleButtons.submenu ); // add the submenu nav buttons
		$( '.' + mainMenuButtonClass ).each( _addClassID );
		$( window ).on( 'resize.workstation', _doResize ).triggerHandler( 'resize.workstation' );
		$( '.' + mainMenuButtonClass ).on( 'click.workstation-mainbutton', _mainmenuToggle );
		$( '.' + subMenuButtonClass ).on( 'click.workstation-subbutton', _submenuToggle );
	};

	// add nav class and ID to related button
	function _addClassID() {
		var $this = $( this ),
			nav   = $this.next( 'nav' ),
			id    = 'class';
		$this.addClass( $( nav ).attr( 'class' ) );
		if ( $( nav ).attr( 'id' ) ) {
			id = 'id';
		}
		$this.attr( 'id', 'mobile-' + $( nav ).attr( id ) );
	}
	
	// check CSS rule to determine width
	function _combineMenus(){
		if ($( '.js nav' ).css( 'position' ) == 'relative' ){ // depends on .js nav having position: relative; in style.css
			$( 'ul.menu-secondary > li' ).addClass( 'moved-item' ); // tag moved items so we can move them back
			$( 'ul.menu-secondary > li' ).appendTo( 'ul.menu-primary' );
			$( '.nav-secondary' ).hide();
		} else {
			$( '.nav-secondary' ).show();
			$( 'ul.menu-primary > li.moved-item' ).appendTo( 'ul.menu-secondary' );
			$( 'ul.menu-secondary > li' ).removeClass( 'moved-item' );
		}
	}

	// Change Skiplinks and Superfish
	function _doResize() {
		var buttons = $( 'button[id^=mobile-]' ).attr( 'id' );
		if ( typeof buttons === 'undefined' ) {
			return;
		}
		_superfishToggle( buttons );
		_changeSkipLink( buttons );
		_maybeClose( buttons );
	}

	/**
	 * action to happen when the main menu button is clicked
	 */
	function _mainmenuToggle() {
		var $this = $( this );
		_toggleAria( $this, 'aria-pressed' );
		_toggleAria( $this, 'aria-expanded' );
		$this.toggleClass( 'activated' );
		$( 'nav.nav-primary' ).slideToggle( 'fast' ); //changed to .nav-primary since we're not toggling .nav-secondary
	}

	/**
	 * action for submenu toggles
	 */
	function _submenuToggle() {

		var $this  = $( this ),
			others = $this.closest( '.menu-item' ).siblings();
		_toggleAria( $this, 'aria-pressed' );
		_toggleAria( $this, 'aria-expanded' );
		$this.toggleClass( 'activated' );
		$this.next( '.sub-menu' ).slideToggle( 'fast' );

		others.find( '.' + subMenuButtonClass ).removeClass( 'activated' ).attr( 'aria-pressed', 'false' );
		others.find( '.sub-menu' ).slideUp( 'fast' );

	}

	/**
	 * activate/deactivate superfish
	 */
	function _superfishToggle( buttons ) {
		if ( typeof $( '.js-superfish' ).superfish !== 'function' ) {
			return;
		}
		if ( 'none' === _getDisplayValue( buttons ) ) {
			$( '.js-superfish' ).superfish( {
				'delay': 100,
				'animation': {'opacity': 'show', 'height': 'show'},
				'dropShadows': false
			});
		} else {
			$( '.js-superfish' ).superfish( 'destroy' );
		}
	}

	/**
	 * modify skip links to match mobile buttons
	 */
	function _changeSkipLink( buttons ) {
		var startLink = 'genesis-nav',
			endLink   = 'mobile-genesis-nav';
		if ( 'none' === _getDisplayValue( buttons ) ) {
			startLink = 'mobile-genesis-nav';
			endLink   = 'genesis-nav';
		}
		$( '.genesis-skip-link a[href^="#' + startLink + '"]' ).each( function() {
			var link = $( this ).attr( 'href' );
			link = link.replace( startLink, endLink );
			$( this ).attr( 'href', link );
		});
	}

	function _maybeClose( buttons ) {
		if ( 'none' !== _getDisplayValue( buttons ) ) {
			return;
		}
		$( '.menu-toggle, .sub-menu-toggle' )
			.removeClass( 'activated' )
			.attr( 'aria-expanded', false )
			.attr( 'aria-pressed', false );
		$( 'nav, .sub-menu' )
			.attr( 'style', '' );
	}

	/**
	 * generic function to get the display value of an element
	 * @param  {id} $id ID to check
	 * @return {string}     CSS value of display property
	 */
	function _getDisplayValue( $id ) {
		var element = document.getElementById( $id ),
			style   = window.getComputedStyle( element );
		return style.getPropertyValue( 'display' );
	}

	/**
	 * Toggle aria attributes
	 * @param  {button} $this     passed through
	 * @param  {aria-xx} attribute aria attribute to toggle
	 * @return {bool}           from _ariaReturn
	 */
	function _toggleAria( $this, attribute ) {
		$this.attr( attribute, function( index, value ) {
			return 'false' === value;
		});
	}

	$(document).ready(function () {

		// run test on initial page load
		_combineMenus();

		// run test on resize of the window
		$( window ).resize( _combineMenus );
		
		workstation.params = typeof WorkstationL10n === 'undefined' ? '' : WorkstationL10n;

		if ( typeof workstation.params !== 'undefined' ) {
			workstation.init();
		}

	});




	$(document).ready(function() {
	    $('.tabs .tab-links a').on('click', function(e)  {
	        var currentAttrValue = jQuery(this).attr('href');
	
	        // Show/Hide Tabs
	        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
	
	        // Change/remove current tab to active
	        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
	
	        e.preventDefault();
	    });
	    
	    
	    $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top - 100
		        }, 1000);
		        return false;
		      }
		    }
		  });
		  
		  
		  
		/* =====  CUSTOM ACTIVATOR SCRIPTS
		==================================================================================*/ 
		$('.site-container').attr('id','site-container');
		  
		// Scroll Reveal script for the homepage
		// https://github.com/jlmakes/scrollreveal.js
		window.sr = ScrollReveal();
		sr.reveal('.internal-cta .content', {
			viewOffset: { top: 60 },
			origin: 'left',
			mobile: false,
		}),
		sr.reveal('.internal-cta .video', {
			viewOffset: { top: 90 },
			delay: 400,
			origin: 'left',
			mobile: false,
		}),
		
		
		// new homepage v3
		sr.reveal('.section-strategy .graphic', {
			viewOffset: { top: 90 },
			distance: '200px',
			scale: 1,
			opacity: 1,
			origin: 'right',
		}),
		
		
		sr.reveal('.section-mission .line', {
			viewOffset: { top: 90 },
			opacity: 1,
			scale: 1,
			distance: '100px',
		}, 100),
		
		sr.reveal('.section-home-work a', {
			viewOffset: { top: 90 },
			duration: 500,
			mobile: false,
		}, 100),
		sr.reveal('.section-home-services div', {
			viewOffset: { top: 90 },
			duration: 1000,
			mobile: false,
		}, 100);
		
		
		
		// homepage work section
		$('.work-item').hover(function(){
			$(this).siblings().toggleClass('inactive');
		});
		
		if($('.work-item').length) {
			$('.work-item').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true,
				}
			});	
		};
		
		  
	});

	
	// GenCon landing page form (custom input fields)
	$('.wpcf7-form input').click(function() {
		$('input:not(:checked)').parent().removeClass("active");
		$('input:checked').parent().addClass("active");
	});	
	
	
	
	// shrink the header on scroll
	var wHeight = $(window).height();
	$(document).on("scroll", function(){
		if ($(document).scrollTop() > wHeight){
			$("header").addClass("shrink");
		} else {
			$("header").removeClass("shrink");
		}
	});
	
	
	
	// homepage hero reveal
	$(document).ready(function(){
		function reveal() {
			$('.section-hero .line,.hero-canvas,header').addClass('isShown');
		}
		setTimeout(reveal, 50);	
		
		
/*
		var m_opts     = { delay: 1 },
	    m_fromOpts = { drawSVG: '0' },
	    m_toOpts   = { drawSVG: '100% 0', 'visibility': 'visible' },
		mtl        = new TimelineMax(m_opts),
	    m_path     = document.querySelectorAll('#logo-asx path');
	
		mtl.staggerFromTo(m_path, 0.375, m_fromOpts, m_toOpts, 0.375)
	    .to(m_path, 1, { fill: '#000' });
	    
*/
	    
	    
	    
	});

	
	

	
	
	
				

})( document, jQuery );
