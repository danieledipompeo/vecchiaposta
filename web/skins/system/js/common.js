// Bind the possible Add to Cart btns with event to position top links
$(document).ready(function(){
	
/* GDP:EDT: changed #menu to .menu to support vertical popup menus */

	// Menu Animation
    $('.menu ul li').hover(
        function() {
            $(this).addClass("active");
            $(this).find('div').not('.subsub_menu, .subsubsub_menu').stop(false, true).slideDown({
            	duration:300,
            	easing:"easeOutExpo"});
        },
        function() {
            $(this).removeClass("active");        
            $(this).find('div').not('.subsub_menu, .subsubsub_menu').stop(false, true).slideUp({
            	duration:100,
            	easing:"easeOutExpo"});
        }
    );

	// Sub Menu Animation
    $('.menu ul li li').hover(
        function() {
            $(this).find('.subsub_menu').stop(false, true).slideDown({
            	duration:300,
            	easing:"easeOutExpo"});
        },
        function() {        
            $(this).find('.subsub_menu').stop(false, true).hide();
        }
    );	
    
    // Subsub Menu Animation
    $('.menu ul li li li').hover(
    		function() {
    			$(this).find('.subsubsub_menu').stop(false, true).slideDown({
    				duration:300,
    				easing:"easeOutExpo"});
    		},
    		function() {        
    			$(this).find('.subsubsub_menu').stop(false, true).hide();
    		}
    );	
	

	
	// Sidebar Nav effects	
	$('.side_bar_nav a').not(".active").hover(
		function() {
			$(this).children('.hover_span').stop().animate({width:'100%'},500,'easeOutExpo');
		},
		function() {
			$(this).children('.hover_span').stop().animate({width:'0'},200,'easeOutExpo');
		}
	);	

	
	/*GDP:EDT: new accordion code */
	/*DDP:FIXED: fixed the icon of the first opened content */
	/* Accordions */	
	$(".acc_item .accordion_content").hide();	
	//$(".accordion_title").click(function()
	$(".accordion_title .acc_control").click(function(){
		
			//var acc_holder = $(this).parents(".acc_holder");
			var acc_control_parent = $(this).parents(".accordion_title");
			var acc_holder = acc_control_parent.parents(".acc_holder");
			var acc_content = acc_control_parent.siblings(".accordion_content");
			if(acc_holder.hasClass("acc_single")){
				$(".accordion_content",acc_holder).not(acc_content).slideUp(600,'easeInOutExpo');
				$(".accordion_title",acc_holder).not(acc_control_parent).removeClass("active_acc");
			}
			acc_content.slideToggle(600,'easeInOutExpo');		
			if(acc_control_parent.hasClass('active_acc'))
			{
				acc_control_parent.removeClass("active_acc");
			}else{
				acc_control_parent.addClass("active_acc");
			}
	});
	
	setTimeout(function(){
			$(".acc_holder .acc_item:first-child .accordion_title .acc_control").delay(1500).click();
		},600);
	/* Accordions::END */
	
	
	
	/* Info Messages */
	$(".closable").each(function(){
		$(this).prepend('<a class="close_img"></a>');		
	});
	
	$(".close_img").click(function(){
		$(this).parent().fadeOut(600);
	});
	

	// Sidebar Menu effects
	$('.side_bar_menu a, .menu.vertical a').not(".active").hover(
			function() {
				$(this).children('.hover_span').stop().animate({width:'100%'},500,'easeOutExpo');
			},
			function() {
				$(this).children('.hover_span').stop().animate({width:'0'},200,'easeOutExpo');
			}
	);	
	
	
});

/* TABS */
$.fn.tabs = function() {
	var selector = this;
	
	this.each(function() {
		var obj = $(this); 
		
		$(obj.attr('href')).hide();
		
		$(obj).click(function() {
			$(selector).removeClass('selected');
			
			$(selector).each(function(i, element) {
				$($(element).attr('href')).hide();
			});
			
			$(this).addClass('selected');
			
			$($(this).attr('href')).fadeIn();
			
			return false;
		});
	});

	$(this).show();
	
	$(this).first().click();
};