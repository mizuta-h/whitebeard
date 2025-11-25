jQuery(function() {
	
	//SPナビ
	//$(document).ready(function () {
	   // hsize = $("body").height();
	    //$(".sp_menu").css("height", hsize + "px");
	//});
	//$(window).resize(function () {
	   // hsize = $("body").height();
	  //  $(".sp_menu").css("height", hsize + "px");
	//});
	$("#menu-btn_sp").click(function(){
		$(".menuWrapp").toggleClass('on');
		$("#menu-btn_sp").toggleClass("close");
	});
	$(".company_inner_btn span,#header a").click(function(){
		$(".company_inner_btn .company_menu").toggleClass('on');
		$(".company_inner_btn span").toggleClass("close");
	});
	
		$(".sp_menuWrap a").click(function(){
		$(".menuWrapp").toggleClass('on');
		$("#menu-btn_sp").removeClass("close");
	});
	$(".footlinks h3").click(function(){
		$(this).parent().toggleClass('on');;
	});

	
	
	//スムーススクロール
    $('a[href^="#"]').click(function () {
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-120;

        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
	
	$('body').delay(1200).queue(function() {
    $(this).addClass('intno').dequeue();
});
    
	$('.line').delay(300).queue(function() {
    $(this).addClass('on').dequeue();
});
	
})

