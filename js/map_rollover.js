
jQuery(document).ready(function($){
    console.log('1');
	$('img[usemap]').maphilight();
    console.log('2');
	$('img[usemap]').rwdImageMaps();
    console.log('3');
});


jQuery(window).bind('resize', function(e)
{
    window.resizeEvt;
    jQuery(window).resize(function()
    {
        clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function()
        {
            jQuery('img[usemap]').maphilight();
        }, 250);
    });
});