if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
$.include('js/superfish.js')
$.include('js/jquery.hoverIntent.minified.js')
$.include('js/FF-cash.js')
$.include('js/tms-0.4.1.js')
$.include('js/uCarousel.js')
$.include('js/jquery.easing.1.3.js')
$.include('js/jquery.tools.min.js')
$.include('js/jquery.jqtransform.js')
$.include('js/jquery.quicksand.js')
$.include('js/jquery.snippet.min.js')
$.include('js/jquery-ui-1.8.17.custom.min.js')
$.include('js/jquery.cycle.all.min.js')
$.include('js/jquery.cookie.js')
$.include('js/jquery.backgroundPosition.js')
$(function(){

		$('.slider-1')._TMS({
			show:0,
			pauseOnHover:false,
			prevBu:'.prev-1',
			nextBu:'.next-1',
			playBu:'.play-1',
			duration:800,
			preset:'fade',
			pagination:false,//'.pagination',true,'<ul></ul>'
			pagNums:false,
			slideshow:5000,
			numStatus:false,
			banners:false,// fromLeft, fromRight, fromTop, fromBottom
			waitBannerAnimation:false,
			progressBar:false
		})		

$(".play-1 em").hover(function(){
    $(this).addClass("alt");
    Cufon.refresh();
   }, function(){
     $(this).removeClass("alt");
     Cufon.refresh();
     });

$(".play-1 span").hover(function(){
    $(this).addClass("alt");
    Cufon.refresh();
   }, function(){
     $(this).removeClass("alt");
     Cufon.refresh();
     });

//$('#imgGray').hover(function(){$('#imgGray').grayScale()})
$(document).ready(function(){
	$(".imgGray").hover(
	function() {
	$(this).stop().animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).stop().animate({"opacity": "1"}, "slow");
	});
});


$('.list-1 li a').hover(function(){
		$(this).stop().animate({backgroundPosition:'-293px bottom'},800,'easeOutQuint');   
			}, function(){
			$(this).stop().animate({backgroundPosition:'0px bottom'},800,'easeOutQuint'); 		
		})
	$('ol li a').hover(function(){
		$(this).stop().animate({backgroundPosition:'0px bottom'},700);   
			}, function(){
			$(this).stop().animate({backgroundPosition:'-293px bottom'},700); 		
		})
	$('.text-bot a').hover(function(){
		$(this).stop().animate({backgroundPosition:'-83px bottom'},700);   
			}, function(){
			$(this).stop().animate({backgroundPosition:'0px bottom'},700); 		
		})
	$('.link-1').hover(function(){
		$(this).find("span").stop().animate({backgroundPosition:'-193px bottom'},700);   
			}, function(){
			$(this).find("span").stop().animate({backgroundPosition:'0px bottom'},700); 		
		})
	$('.link-3, .link-4').hover(function(){
		$(this).stop().animate({backgroundPosition:'-430px bottom'},700);   
			}, function(){
			$(this).stop().animate({backgroundPosition:'0px bottom'},700); 		
		})



   
	if($('#pro_contact-form').length||$('#contact-form').length)$.include('js/forms.js');
	
	
	if($('.pro_tweet').length)$.include('js/jquery.tweet.js');
	if($('.lightbox-image').length)$.include('js/jquery.prettyPhoto.js');	
	if($('.pro_kwicks').length)$.include('js/kwicks-1.5.1.pack.js');
	if($('#pro_counter').length)$.include('js/jquery.countdown.min.js');
	if($('.fixedtip').length||$('.clicktip').length||$('.normaltip').length)$.include('js/jquery.atooltip.pack.js')
// Code
	$("pre.pro_htmlCode2").snippet("html",{style:"print",showNum:false,menu:false});
	$("pre.pro_jsCode2").snippet("javascript",{style:"print",showNum:false,menu:false});
// SlideDown
	$(".pro_description-box dd").show()
	$("pre.pro_htmlCode").snippet("html",{style:"print"});			
	$("pre.pro_cssCode").snippet("css",{style:"print"});			
	$("pre.pro_jsCode").snippet("javascript",{style:"print"});
	$(".pro_description-box dd").hide()	
	$(".pro_description-box dt").click(function(){
		$(this).toggleClass("active").parent(".pro_description-box").find("dd").slideToggle(400);					
	});
	$(".pro_slide-down-box dt").click(function(){$(this).toggleClass("active").parent(".pro_slide-down-box").find("dd").slideToggle(200);});
	$(".pro_slide-down-box2 dt").click(function(){$(this).toggleClass("active").parent(".pro_slide-down-box2").find("dd").slideToggle(200);});	
// Tabs
	$(".pro_tabs1 ul").tabs(".pro_tabs1 .pro_tab-content");
	$(".pro_tabs2 ul").tabs(".pro_tabs2 .pro_tab-content");
	$(".pro_tabs3 ul").tabs(".pro_tabs3 .pro_tab-content");
	$(".pro_tabs4 ul").tabs(".pro_tabs4 .pro_tab-content");
	$(".pro_tabs5 ul").tabs(".pro_tabs5 .pro_tab-content");
	$(".pro_tabs-horz-top ul.pro_tabs-nav").tabs(".pro_tabs-horz-top .pro_tab-content");
	$(".pro_tabs-horz-bottom ul.pro_tabs-nav").tabs(".pro_tabs-horz-bottom .pro_tab-content");
	$(".pro_tabs-horz-top2 ul.pro_tabs-nav").tabs(".pro_tabs-horz-top2 .pro_tab-content");
	$(".pro_tabs-horz-bottom2 ul.pro_tabs-nav").tabs(".pro_tabs-horz-bottom2 .pro_tab-content");
	$(".pro_tabs-vert-left ul.pro_tabs-nav").tabs(".pro_tabs-vert-left .pro_tab-content");
	$(".pro_tabs-vert-right ul.pro_tabs-nav").tabs(".pro_tabs-vert-right .pro_tab-content");	
// Forms
	$('#pro_form2').jqTransform({imgPath:'images/'});
// Carausel
	$('.pro_list-car').uCarousel({show:4,buttonClass:'pro_car-button', pageStep:1, shift:false})
	$('.pro_carousel').uCarousel({show:4,buttonClass:'pro_car-button'})
// Slider
	$('.pro_slider')._TMS({
		show:0,
		pauseOnHover:false,
		prevBu:'.pro_prev',
		nextBu:'.pro_next',
		playBu:'.pro_play',
		items:'.pro_items>li',
		duration:1000,
		preset:'simpleFade',
		bannerCl:'pro_banner',
		numStatusCl:'pro_numStatus',
		pauseCl:'pro_paused',
		pagination:true,
		paginationCl:'pro_pagination',
		pagNums:false,
		slideshow:7000,
		numStatus:true,
		banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
		waitBannerAnimation:false,
		progressBar:'<div class="pro_progbar"></div>'})	
// Simple Gallery
	$('.pro_simple_gallery')._TMS({
			show:0,
			pauseOnHover:true,
			prevBu:false,
			nextBu:false,
			playBu:false,
			pagNums:false,
			numStatus:false,
			duration:1000,
			preset:'simpleFade',
			items:'.pro_items>li',
			bannerCl:'pro_banner',
			pagination:$('.pro_img-pags').uCarousel({show:10,shift:0,buttonClass:'pro_btn'}),
			paginationCl:'pro_gal-pags',
			slideshow:5000,
			banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
			waitBannerAnimation:false,
			progressBar:'<div class="pro_progbar"></div>'})		
// Ranges	
$("#pro_font-size-slider").change(function(e) {$(".pro_icons.pro_basic li a").css("font-size", $(this).val() + "px");});
$(".pro_color-slider").change(function(e) {$(".pro_icons.pro_basic li a").css("color", "hsla(" + $("#pro_color-slider-1").val() + ", " + $("#pro_color-slider-2").val() + "%, " + $("#pro_color-slider-3").val() + "%, 1)");	});
$(".pro_shadow-slider").change(function(e) {	$(".pro_icons.pro_basic li a").css("text-shadow", $("#pro_shadow-slider-1").val() + "px " + $("#pro_shadow-slider-2").val() + "px " + $("#pro_shadow-slider-3").val() + "px black");	 });
// Testimonials
	$('#pro_testimonials').cycle({fx:'fade', height:'auto',timeout:0,next:'#pro_next_testim',prev:'#pro_prev_testim', after: onAfter });
// Buttons
	$(".pro_notClicked").click(function(event) {event.preventDefault();});
})

function onAfter(curr, next, opts, fwd){var $ht=$(this).height();$(this).parent().animate({height:$ht})}
