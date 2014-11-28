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

if($(window).width() >= 1920){
	$('.clientes_slider img').each(function(){
		var img_height_center = $(window).height() - $('.slider_clientes_nav').height() - $('header.nav_clientes').height() - parseInt($(this).attr('data-height'));
		var result = img_height_center / 2;
		$(this).css('margin-top',result + 'px');
	});
}
if($(window).width() < 1920 && $(window).width() >= 900){
		$('.clientes_slider img').each(function(){
			var img_height = $(window).height() - $('.slider_clientes_nav').height() - $('header.nav_clientes').height();
			$(this).css('max-height',img_height + 'px');
	    });
}
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

$('.frase_click').on('click',function(){
	if($(window).width() <= 767){
		$('#frase').css('max-height',$(window).height() + 'px');
	}
	var show = $('#frase_click').attr('data-show');
	if(show == 'false'){
		$('#frase').fadeIn();
		$('#frase_click').attr('data-show','true');
		if($(window).width() <= 767){
			$('html').attr('style','overflow: scroll !important');
		    $('body').attr('style','overflow: scroll !important');
		    $('footer.slider_clientes_nav').css('opacity','0.30');
	    }
	}
	else{
		$('footer.slider_clientes_nav').css('opacity','1.0');
	    $('#frase').fadeOut();
	    $('#frase_click').attr('data-show','false');
	    $('html').attr('style','overflow: hidden !important');
		$('body').attr('style','overflow: hidden !important');
	}
});

if( $("#is_lab").attr('data-lab') == 'true' ){
	$('.nav_clientes a:contains("Laboratório")').addClass('active');
}
if( $("meta[name=lab-video-open]").attr('content') && $("meta[name=lab-video-open]").attr('content').length > 0 ){
	var value = $("meta[name=lab-video-open]").attr('content');
	var modal_id = 'reveal-modal-id';
	$('#'+modal_id).addClass('medium');
	$('#' + modal_id).foundation('reveal', 'open', {
		url: value + '?reveal-modal-ajax=true',
		success: function (data) {
				$('#' + modal_id).prepend('<a class="close-reveal-modal">&#215;</a>');
			}
		});

}
$('#nav_mobile_toggle').on('click',function(e){
	var show = $(this).attr('data-open');
	if(show == 'false'){
		$('#nav_mobile').fadeIn();
		$(this).attr('data-open','true');
	}
    if(show == 'true'){
	    $('#nav_mobile').fadeOut();
	    $(this).attr('data-open','false');
	}
});
});
