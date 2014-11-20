(function ( $ ) {
	$.fn.greenify = function( options ) {
		
		var settings = $.extend({
			color: "#556b2f",
			backgroundColor: "white"
		}, options );

		return this.css({
			color: settings.color,
			backgroundColor: settings.backgroundColor
		});
	};
}( jQuery ));


