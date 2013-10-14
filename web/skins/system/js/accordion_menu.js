$(document).ready(function(){
	
	/**
	 * Creating plus and minus dynamic icons
	 */
	var icons = {
		header : "plus-control",
		activeHeader: "minus-control"
	};
	
	/**
	 * Converting the menu in a jqueryUI accordion
	 */
	$("#sidemenu").accordion({
		icons : icons,
		heightStyle: "content"
	});
});