/* eslint-disable no-unused-vars */
AOS.init();

( function( $ ) {

	// Burger Nav

	$( '#burger-nav' ).click( () => {
		$( '#burger-nav' ).toggleClass( 'open' );
		$( '.mobile-nav' ).toggleClass( 'open' );
		$( '.burger-overlay' ).toggleClass( 'show' );
	});

	$( '.collapse-bar' ).click( () => {
		$( '.shape-involved' ).toggleClass( 'open' );
		$( '.collapse-bar' ).toggleClass( 'close' );
	});

	// Banner

	$( '#close-banner' ).click( () => {
		$( '#banner' ).hide();
	});

	// Progress Bar

	const progressWrap = document.getElementById( 'progress-wrap' );

	if ( progressWrap ) {
		const replaceComma = ( num ) => {
			return num.replace( /,/g, '' );
		};
		let percentage = replaceComma( $( '#current-count' ).html() ) / replaceComma( $( '#goal' ).html() ) * 100;
		$( $( '#progress' ) ).css( 'width', percentage + '%' );
	}


	/* Burger nav */
	$( '.burger, .burger-overlay' ).click( function() {
		$( '.#burger-nav' ).toggleClass( 'clicked' );
		$( '.mobile-nav' ).toggleClass( 'show' );
		$( 'body' ).toggleClass( 'overflow' );
	});

	// Image hover
	// $( '.hover' ).mouseleave(
	// 	function() {
	// 		$( this ).removeClass( 'hover' );
	// 	}
	// );

}( jQuery ) );
