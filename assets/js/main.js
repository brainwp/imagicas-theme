jQuery(document).ready(function($) {
	// fitVids.
	//$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();

});
jQuery(document).ready(function($) {
sliderChange = function(el){
	var current = el.currentSlide;
	$('.slider_nav_active').removeClass('slider_nav_active');
	$(".item[data-num-slick='" + current +"']").addClass('slider_nav_active');
}

var sync_show = 5;
var itens_total = parseInt($('#itens_num').attr('data-num'),10);
if(itens_total < 5){
	sync_show = itens_total - 1;
}
console.log(sync_show);
 $('#sync1').slick({
 	lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#sync2',
    infinite: true,
    onAfterChange: sliderChange,
    onInit: sliderChange
});
$('#sync2').slick({
    slidesToShow: sync_show,
    slidesToScroll: 1,
    arrows: true,
    asNavFor: '#sync1',
    nextArrow: '<div class="slider_nav_next"></div>',
    prevArrow: '<div class="slider_nav_prev"></div>',
    infinite:true,
    //dots: true,
    //centerMode: true,
    focusOnSelect: false,
    //infinite: true,
});

var img_height = $(window).height();
var img_width = $(window).width() + 80;

$('.clientes_slider img').each(function(){
	//$(this).css('height',img_height + 'px');
	$(this).css('width',img_width + 'px');
});
if( $("#sync1").length > 0 ){
	$('.nav_clientes a:contains("Clientes")').addClass('active');
	$('html').attr('style','overflow: hidden !important');
}
$('.item').on('click',function(){
	var num = $(this).attr('data-num-slick');
	///alert(num);
	$('#sync1').slickGoTo(num);
	$('#sync2').slickGoTo(num);
});

$('#frase_click').on('click',function(){
	var show = $(this).attr('data-show');
	if(show == 'false'){
		$('#frase').fadeIn();
		$(this).attr('data-show','true');
	}
	else{
	    $('#frase').fadeOut();
	    $(this).attr('data-show','false');
	}
});

if( $("#is_lab").attr('data-lab') == 'true' ){
	$('.nav_clientes a:contains("Laboratório")').addClass('active');
}
});
