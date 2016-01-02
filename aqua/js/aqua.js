// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());
// Animated nav page
jQuery(document).ready(function($){
	var isLateralNavAnimating = false;	
	//open/close lateral navigation
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		//stop if nav animation is running 
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			$('body').toggleClass('navigation-is-open');
			$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});
// Scroll to top button
// create the back to top button
$('body').append('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 1800;

$('main').scroll(function() {
    if ($('main').scrollTop() > amountScrolled) {
        $('a.back-to-top').fadeIn(2000);
    } else {
        $('a.back-to-top').fadeOut(200);
    }
});
$('a.back-to-top').click(function() {
    $('html, body, main').animate({
        scrollTop: 0
    }, 800);
    return false;
});
// Current menu item
var path = location.pathname.substring(1);
    if ( path ){}
    $('.cd-primary-nav a[href="' + path + '"]').attr('class', 'active');
    $('.footer-nav a[href="' + path + '"]').attr('class', 'active');
