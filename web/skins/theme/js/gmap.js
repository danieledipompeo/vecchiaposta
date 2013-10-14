var map = null;
var mapWidget = null;

function initialize() {
	var latlng = new google.maps.LatLng(42.457787,13.232897);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		}
	};

	map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	var contentString = '<div class="gmap-content"><h2>B&B La Vecchia Posta</h2><p>Via Amiternum, Cagnano Amiterno, 67012, L\'aquila</p></div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: latlng, 
		map: map
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}
