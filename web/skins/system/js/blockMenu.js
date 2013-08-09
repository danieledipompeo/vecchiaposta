
/**
 * Graphic Global variables
 * in this variables will be saved the initial ui position values for the considering elements
 */
var menu_top;
var menu_offset;
var sidebar_left_offset_top;
var sidebar_left_offset;
var scrollTop;
var sidebar_right_offset_top;
var sidebar_right_offset;



/**
 * 
 * @param menu
 */
function menu_fixed(menu){
	menu.attr("class","fixed-position ");
	menu.css("top", "0");
	menu.css("width","90%");
}


/**
 * 
 * @param menu
 */
function menu_absolute(menu){
	menu.attr("class","absolute-position");
	menu.css("top",$("#bar-menu-hidden").position().top);
	menu.css("width","100%");
}

/**
 * 
 * @param sidebar_left
 */
function sidebar_left_fixed(sidebar_left){
	var menu = $("#bar-menu");
	sidebar_left.css("position","fixed");
	sidebar_left.css("top",menu.outerHeight(true)-15);
	sidebar_left.css("left", (
			$("#sidebar-left-hidden").offset().left  )
		);
}

/**
 * 
 * @param sidebar_left
 */
function sidebar_left_absolute(sidebar_left){
	var menu = $("#bar-menu");
	sidebar_left.css("position","absolute");
	sidebar_left.css("top",(menu.outerHeight(true)+menu.position().top));
	sidebar_left.css("left", 0);
}
/**
 * 
 * @returns
 */
function sidebar_right_absolute(sidebar_right){
	var menu = $("#bar-menu");
	hidden_right_sidebar=$("#sidebar-right-hidden");
	sidebar_right.css("position","absolute");
	sidebar_right.css("top",(menu.outerHeight(true)+menu.position().top));	
	sidebar_right.css("left", hidden_right_sidebar.position().left);
	sidebar_right.css("margin-right", 0);
	return news.position().left;
}


/**
 * 
 * @param news it must be a jquery object, not a dom element
 * @param position it must be a jquery object, not a dom element
 */
function sidebar_right_fixed(sidebar_right){
	
	var menu = $("#bar-menu");
	sidebar_right.css("position","fixed");
	sidebar_right.css("top",menu.outerHeight(true)-15);
	sidebar_right.css("left", $("#sidebar-right-hidden").offset().left);
	sidebar_right.css("width", $("#sidebar-right-hidden").width());
	
}

/**
 * this function is responsible for the left sidebar behavior 
 */
function rightSideBarBehavior()
{
	vertical_viewport = $(window).height();
	header_height = $("#header_content").height();
	sidebar_right = $("#sidebar-right");
	sidebar_right_offset = sidebar_right.offset();
	sidebar_right_offset_top = sidebar_right.offset().top+sidebar_right.height();
	scrollTop = $(window).scrollTop();
	
	/**
	 * If the top bar is too close to the footer hide the menu
	 */
	if (sidebar_right_offset_top >= ($("#footer").position().top-20))
	{
		sidebar_right.hide();
	}
	else{
		/**
		 * Otherwise show the menu
		 */
		sidebar_right.show();
	}
	
	/**
	 * If the scroll is lower (major in monitor coordinates system) convert the menu in fixed
	 * in order to follow the screen
	 */
	if ( (scrollTop) > menu_top)
	{
		sidebar_right_fixed(sidebar_right);
	}
	else
	{
		/**
		 * Otherwise place the menu where it was
		 */
		sidebar_right_absolute(sidebar_right);
	}
}


/**
 * this function is responsible for the left sidebar behavior
 */
function leftSideBarBehavior()
{
	
	vertical_viewport = $(window).height();
	header_height = $("#header_content").height();
	menu = $("#bar-menu");
	sidebar_left = $("#sidebar-left");
	sidebar_left_offset = sidebar_left.offset();
	sidebar_left_offset_top = sidebar_left.offset().top+sidebar_left.height();
	scrollTop = $(window).scrollTop();
	
	/**
	 * If the top bar is too close to the footer hide the menu
	 */
	if (sidebar_left_offset_top >= ($("#footer").position().top-20))
	{
		sidebar_left.hide();
	}
	else{
		/**
		 * Otherwise show the menu
		 */
		sidebar_left.show();
	}
	
	/**
	 * If the scroll is lower (major in monitor coordinates system) convert the menu in fixed
	 * in order to follow the screen
	 */
	if ( (scrollTop) > menu_top)
	{
		menu_fixed(menu);
		sidebar_left_fixed(sidebar_left);
	}
	else
	{
		/**
		 * Otherwise place the menu where it was
		 */
		menu_absolute(menu);
		sidebar_left_absolute(sidebar_left);
	}
}


/**
 * Loading function and associating it to events in document
 */
$(document).ready(function(){
	
	/**
	 * Creating the behavior for desktop browser interface (more than 767 px width)
	 */
	if($(window).width() > "767"){

		vertical_viewport = $(window).height();
		header_height = $("#header_content").height();
		
		/**
		 * Imposing the footer "over the fold"
		 */
		$("#content").css("min-height", (vertical_viewport - header_height) );
		
		news = $("#news");
		menu = $("#bar-menu");
		sidebar_left = $("#sidebar-left");
		sidebar_right= $("#sidebar-right");
		
		menu_top = menu.position().top;
		sidebar_left_offset_top = sidebar_left.position().top+sidebar_left.height();
		sidebar_right_offset_top = sidebar_right.position().top+sidebar_right.height();
		
		menu_offset = menu.offset();
		
		/**
		 * appliying the behavior on the scroll event of the entire window
		 */
		$(window).scroll(function(){
			/**
			 * moves left sidebar plus sitemap bar
			 */
			leftSideBarBehavior();
			/**
			 * moves only right sidebar
			 */
			//rightSideBarBehavior();
		});
	}
});


