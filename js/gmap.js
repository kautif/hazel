function myMap() {
	var mapProp = {
		center:new google.maps.LatLng(32.727044, -97.298978),
		zoom: 11
	};

	var map = new google.maps.Map(document.getElementById("gmap"), mapProp);

	google.maps.event.addDomListener(window, 'load', myMap);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(32.727044, -97.298978),
		map: map,
		animation: google.maps.Animation.DROP,

	});

	var infowindow = new google.maps.InfoWindow({
		content: "Hazel's Back Porch BBQ <br> 2117 E Maddox Ave <br> Fort Worth, TX 76104"
	});

	google.maps.event.addListener(marker, 'click', function(){
		infowindow.open(map,marker);
	});

	infowindow.open(map,marker);
}