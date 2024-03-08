const swiper = new Swiper( '.swiper-container' );

( function() {
	const t = jQuery( '.js-cookies-info' );
	t.find( '.js-cookies-info__button' ).on( 'click', function() {
		localStorage.setItem( 'cookie', 'approve' ), t.remove(), jQuery( document ).find( '.clinics-content-callback' ).addClass( 'no-cookies-msg' );
	} ),
	'approve' === localStorage.getItem( 'cookie' ) ? ( t.remove(), jQuery( document ).find( '.clinics-content-callback' ).addClass( 'no-cookies-msg' ) ) : t.addClass( 'active' );
}() );

( function() {
	const note = jQuery( '#home_slider .notification' );
	note.find( '.close' ).on( 'click', function() {
		localStorage.setItem( 'cookie-note', 'approve' ), note.remove(), jQuery( document ).find( '.clinics-content-callback' ).addClass( 'no-cookies-msg' );
	} ),
	'approve' === localStorage.getItem( 'cookie-note' ) ? ( note.remove(), jQuery( document ).find( '.clinics-content-callback' ).addClass( 'no-cookies-msg' ) ) : note.addClass( 'active' );
}() );

// Fixed header on scroll
jQuery( window ).scroll( function() {
	if ( jQuery( this ).scrollTop() > 1 ) {
		jQuery( '#header' ).addClass( 'fixed_header' );
	} else {
		jQuery( '#header' ).removeClass( 'fixed_header' );
	}
} );

// Add tabs
jQuery( document ).ready( function() {
	jQuery( '.d-tabs > ul > li' ).click( function() {
		const tab_id = jQuery( this ).attr( 'data-tab' );
		jQuery( '.d-tabs > ul > li' ).removeClass( 'active' );
		jQuery( '.d-tabs .d-content' ).removeClass( 'active' );

		// callPlayer(tab_id,'pauseVideo');
		callPlayer( 'wywg_1', 'pauseVideo' );
		callPlayer( 'wywg_2', 'pauseVideo' );
		callPlayer( 'wywg_3', 'pauseVideo' );

		jQuery( this ).addClass( 'active' );
		jQuery( '#' + tab_id ).addClass( 'active' );
		return false;
	} );

	jQuery( '#what_we_do:not(.crm) .white_blocks .block, #what_we_do .border_blocks .block' ).click( function( e ) {
		jQuery( this ).toggleClass( 'active' );
		e.preventDefault();
	} );

	jQuery( '#home_slider .notification .close' ).click( function( e ) {
		jQuery( this ).closest( '.notification' ).hide();
		e.preventDefault();
	} );
} );

// Плавный скролл по странице
jQuery( document ).ready( function() {
	jQuery( 'a[href*="#"]:not(.tab_ancor)' ).on( 'click', function( e ) {
		const anchor = jQuery( this );
		jQuery( 'html, body' ).stop().animate( {
			scrollTop: jQuery( anchor.attr( 'href' ) ).offset().top - 60,
		}, 777 );
		e.preventDefault();
		return false;
	} );
} );

// Add modal
jQuery( document ).ready( function() {
	jQuery( 'button.da-modal, a.da-modal' ).click( function( e ) {
		const modal_id = jQuery( this ).attr( 'data-name' );

		jQuery( '#modal-icon' ).removeClass( 'active' );
		jQuery( 'body' ).removeClass( 'active-modal' );
		jQuery( '.da-modal-open-bg' ).removeClass( 'open' ).fadeIn();
		jQuery( '#' + modal_id ).removeClass( 'open' );

		jQuery( '.da-modal-open-bg' ).addClass( 'open' ).fadeIn();
		jQuery( '#' + modal_id ).addClass( 'open' );

		jQuery( '#modal-icon' ).toggleClass( 'active' );
		jQuery( 'body' ).toggleClass( 'active-modal' );
		// jQuery('#header .content .navigation').toggleClass('active');

		e.preventDefault();
	} );

	jQuery('a').on('click', function(e) {
		// действия, которые будут выполнены при наступлении события...
		if(jQuery(this).attr("href") === '#contact') {
			jQuery('.da-modal-open-bg').addClass("open").fadeIn();
			jQuery("#whitepaper_modal").addClass("open");
			e.preventDefault();
		}
	});

	jQuery( 'button.da-modal-close' ).click( function() {
		jQuery( '.daModal' ).removeClass( 'open' );
		jQuery( '.da-modal-open-bg' ).fadeOut();

		jQuery( '#nav-icon' ).toggleClass( 'active' );
		jQuery( 'body' ).toggleClass( 'active-modal' );
	} );

	jQuery( '.da-modal-open-bg' ).click( function() {
		jQuery( '.daModal' ).removeClass( 'open' );
		jQuery( '.da-modal-open-bg' ).fadeOut();
	} );
} );

// Custom spoiler
jQuery( '.spoiler > .head' ).on( 'click', function( e ) {
	jQuery( 'div.spoiler' ).not( this ).children( '.cont' ).stop().slideUp( 300 );
	jQuery( this ).closest( 'div.spoiler' ).children( '.cont' ).stop().slideUp( 300 );
	jQuery( '.spoiler > .head' ).not( this ).removeClass( 'active' );
	jQuery( '.spoiler > .cont' ).not( this ).removeClass( 'active' );
	jQuery( this ).closest( 'div.spoiler' ).children( '.cont' ).stop().slideToggle( 300 ).toggleClass( 'active' );
	jQuery( this ).toggleClass( 'active' );
	e.preventDefault();
} );

// Active class for focused input
jQuery( 'input, textarea' ).focus( function() {
	jQuery( this ).closest( '.field' ).addClass( 'active' );
} ).blur( function() {
	if ( ! jQuery( this ).val().trim().length ) {
		jQuery( this ).closest( '.field' ).removeClass( 'active' );
	}
} );

jQuery( document ).ready( function() {
	jQuery( '.nav_icon' ).click( function() {
		jQuery( this ).children( '#nav-icon' ).toggleClass( 'active' );
		jQuery( 'body' ).toggleClass( 'active-nav' );
		jQuery( '#header .content .navigation' ).toggleClass( 'active' );
	} );

	jQuery( '.modal_icon' ).click( function() {
		jQuery( '.daModal' ).removeClass( 'open' );
		jQuery( '.da-modal-open-bg' ).fadeOut();

		jQuery( '#modal-icon' ).removeClass( 'active' );
		jQuery( 'body' ).removeClass( 'active-modal' );
	} );
} );

( function() {
	'use strict';
	const breakpoint = window.matchMedia( '(min-width:992px)' );
	let whiteSwiper;
	let borderSwiper;
	const breakpointChecker = function() {
		if ( breakpoint.matches === true ) {
			if ( whiteSwiper !== undefined ) {
				whiteSwiper.destroy( true, true );
			}
			if ( borderSwiper !== undefined ) {
				borderSwiper.destroy( true, true );
			}
		} else if ( breakpoint.matches === false ) {
			return enableSwiper();
		}
	};

	const enableSwiper = function() {
		whiteSwiper = new Swiper( '.white_blocks', {
			slidesPerView: '1.20',
			spaceBetween: 10,
			// pagination
			pagination: '.swiper-pagination',
			paginationClickable: true,

			breakpoints: {
				400: {
					slidesPerView: '1.35',
				},
			},

		} );

		borderSwiper = new Swiper( '.border_blocks', {
			slidesPerView: '1.20',
			spaceBetween: 10,
			// pagination
			pagination: '.swiper-pagination',
			paginationClickable: true,
			breakpoints: {
				400: {
					slidesPerView: '1.35',
				},
			},

		} );
	};

	breakpoint.addListener( breakpointChecker );

	breakpointChecker();
}() );

// Auto resize textarea
jQuery.each( jQuery( 'textarea' ), function() {
	const offset = this.offsetHeight - this.clientHeight;

	const resizeTextarea = function( el ) {
		jQuery( el ).css( 'height', 'auto' ).css( 'height', el.scrollHeight + offset );
	};
	jQuery( this ).on( 'keyup input', function() {
		resizeTextarea( this );
	} ).removeAttr( 'data-autoresize' );
} );

jQuery( function( $ ) {
	$( document ).on( 'click', 'button.subcat_link', function() {
		const txtCategory = jQuery( this ).text();
		jQuery( ".sf-label-checkbox:contains('" + txtCategory + "')" ).trigger( 'click' );
	} );

	$( document ).on( 'click', 'button.tagname_link', function() {
		const txtCategory = jQuery( this ).text();
		jQuery( ".sf-label-checkbox:contains('" + txtCategory + "')" ).trigger( 'click' );
	} );

	$( '#checkAll' ).click( function() {
		$( 'input:checkbox' ).not( this ).prop( 'checked', this.checked );
	} );

	$( '#leadership .cards .card' ).click( function() {
		$( '#leadership .cards .card' ).removeClass( 'active' );
		$( this ).toggleClass( 'active' );
	} );
} );

// Cache selectors
let lastId,
	topMenu = jQuery( '#post_nav' ),
	topMenuHeight = topMenu.outerHeight() + 15,
	// All list items
	menuItems = topMenu.find( 'a' ),
	// Anchors corresponding to menu items
	scrollItems = menuItems.map( function() {
		const item = jQuery( jQuery( this ).attr( 'href' ) );
		if ( item.length ) {
			return item;
		}
	} );

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click( function( e ) {
	const href = jQuery( this ).attr( 'href' ),
		offsetTop = href === '#' ? 0 : jQuery( href ).offset().top - topMenuHeight + 1;
	jQuery( 'html, body' ).stop().animate( {
		scrollTop: offsetTop,
	}, 300 );
	e.preventDefault();
} );

// Bind to scroll
jQuery( window ).scroll( function() {
	// Get container scroll position
	const fromTop = jQuery( this ).scrollTop() + topMenuHeight;

	// Get id of current scroll item
	let cur = scrollItems.map( function() {
		if ( jQuery( this ).offset().top < fromTop ) {
			return this;
		}
	} );
	// Get the id of the current element
	cur = cur[ cur.length - 1 ];
	const id = cur && cur.length ? cur[ 0 ].id : '';

	if ( lastId !== id ) {
		lastId = id;
		// Set/remove active class
		menuItems
			.parent().removeClass( 'active' )
			.end().filter( "[href='#" + id + "']" ).parent().addClass( 'active' );
	}
} );

const relatedPosts = new Swiper( '.posts-list', {
	slidesPerView: 1,
	// slideToClickedSlide: true,
	spaceBetween: 20,
	loop: true,
	breakpoints: {
		768: {
			slidesPerView: 2,
			// centeredSlides: false,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
	},
	pagination: {
		el: '#relatedposts .swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '#relatedposts .arrow-next',
		prevEl: '#relatedposts .arrow-prev',
	},
} );

// jQuery(".searchandfilter .sf-field-category > ul > li").click(function() {
//     const activeLabel = jQuery(this).hasClass('sf-option-active');
//     if (activeLabel === true) {
//         jQuery('.searchandfilter ul li.sf-field-reset').css({
//             "display": "none"
//         });
//     } else {
//         jQuery('.searchandfilter ul li.sf-field-reset').css({
//             "display": "block"
//         });
//     }
// });
(function () {
	const t = jQuery(".exitModal-popup");
	t.find(".exitModal-close").on("click", function () {
		jQuery( 'body' ).toggleClass( 'active-modal' );
		localStorage.setItem("auto_banner_whitepapper", "closed"), t.addClass("closed-modal");
	}),
		"closed" === localStorage.getItem("auto_banner_whitepapper") ? (t.addClass("closed-modal")) : t.addClass("show-modal");
})();