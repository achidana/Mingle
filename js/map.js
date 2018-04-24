var Map = {
	options: null,
	obj: null,
	center: null,
	mapTypeId: 'satellite',
	init: function() {
		this.center = new google.maps.LatLng(40.3, -86.7);

		this.options = {
			zoom: 12,
			zoomControl: true,
			zoomControlOptions: {
				position: google.maps.ControlPosition.LEFT_TOP
			},
			mapTypeControl: true,
			scaleControl: true,
			center: this.center,
			mapTypeId: 'satellite',
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				position: google.maps.ControlPosition.TOP_LEFT
			}
		};

		this.obj = new google.maps.Map(document.getElementById("map_canvas"), this.options);
	}

}
