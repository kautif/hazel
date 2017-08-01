function myMap() {
	var mapProp = {
		center:new google.maps.LatLng(32.727044, -97.298978),
		zoom: 13,
		disableDefaultUI: true
	};

	var mapProp2 = {
		center:new google.maps.LatLng(32.727044, -97.298978),
		zoom: 13,
		disableDefaultUI: true
	};

	var map = new google.maps.Map(document.getElementById("gmap"), mapProp);

	// var map2 = new google.maps.Map(document.getElementById("gmap2"), mapProp2);

	google.maps.event.addDomListener(window, 'load', myMap);


	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(32.727044, -97.298978),
		map: map,
		animation: google.maps.Animation.DROP,

	});

	var marker2 = new google.maps.Marker({
		position: new google.maps.LatLng(32.728371, -97.358955),
		map: map,
		animation: google.maps.Animation.DROP,

	});

	var infowindow = new google.maps.InfoWindow({
		content: "COMING SOON <br> 2117 E Maddox Ave<br>Fort Worth, TX 76104"
	});

	var infowindow2 = new google.maps.InfoWindow({
		content: "CLEARFORK FOOD PARK <br> 1541 Merrimac Circle <br> Fort Worth, TX 76107"
	});


	google.maps.event.addListener(marker, 'click', function(){
		infowindow.open(map,marker);
	});

	google.maps.event.addListener(marker2, 'click', function(){
		infowindow2.open(map,marker2);
	});

	infowindow.open(map,marker);

	infowindow2.open(map,marker2);
}