window.eoxiaJS.test.helloWorld = {};
window.eoxiaJS.test.helloWorld.init = function() {
	window.eoxiaJS.test.helloWorld.event();
};

window.eoxiaJS.test.helloWorld.event = function() {
	jQuery( document ).on( 'mouseenter', '.wpeo-tooltip', function( event ) {
		var el = jQuery( '<span class="test">' + jQuery( this ).attr( 'aria-label' ) + '</span>' );
		var pos = jQuery( this ).offset();
		jQuery( this )[0].tooltipElement = el;
		jQuery( 'body' ).append( jQuery( this )[0].tooltipElement );
		el.css( {
			'transform': 'translate3d(' + pos.left + 'px, ' + ( pos.top - jQuery( this ).height() - el.height() ) + 'px, 0px)',
			'opacity': 1
		} );
	} );

	jQuery( document ).on( 'mouseleave', '.wpeo-tooltip', function( event ) {
		jQuery( jQuery( this )[0].tooltipElement ).remove();
	} );
};
