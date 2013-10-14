function scanTooltips() {
	var tips = $(".notemark,.tooltip");
	if (tips.length>0) {
		tips.each(function() {
			$(this).tipsy({fade: true, gravity: 's'});
		});
	}
}

////////////////////

function scanTabs() {
	$(".htabs a").tabs();	
}

function scanMultiSelectors() {
	var multiboxes = $("select[multiple]:not(.preserve):visible");
	if (multiboxes.length>0) {
		multiboxes.each(function() {
			$(this).select2({
			minimumResultsForSearch: 5/*,
			placeholder: "Selezionare...",
			allowClear: true*/
			});
		});
	}
}

function scanFastSelectors() {
	var selectors = $("select:not([multiple]):not(.preserve):visible");
	if (selectors.length>0) {
		selectors.each(function() {
			$(this).select2({
			minimumResultsForSearch: 5/*,
			placeholder: "Selezionare...",
			allowClear: true*/
			});
		});
	}
}
 
function scanCarusels() {
	var selectors = $(".scroll");
	if (selectors.length>0) {
		selectors.each(function() {
			if ($(this).hasClass("vertical")) {
				$(this).jcarousel({
					scroll: 1,
					vertical:true,
					easing: 'easeInOutExpo',
					animation: 600
				});
			} else { //horizontal
				$(this).jcarousel({
					scroll: 1,
					vertical:false,
					easing: 'easeInOutExpo',
					animation: 600,
					visible: ($(this).hasClass("full")?4:1)
				});
			}
			var carousel = $(this).data('jcarousel'); 
			$(window).load(function() {
				carousel.reload();
			});		
			$(window).resize(function() {
					var visibleItems = ($(window).width()  > 767 ? 4 : 1);
					carousel.options.visible = visibleItems;
					carousel.reload();
			});			 
		});							
	}		
}

/////////////////////////////////

$(function() {
	scanTabs();	
	//scanMultiSelectors();
	//scanFastSelectors();
	scanTooltips();
	scanCarusels();			
});



					
	
  
 