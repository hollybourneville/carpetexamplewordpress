jQuery(document).ready(function($) {

	$('.stars').each(function(i,el){
		var rating = $(el).data('rating');
		console.log(rating);
		for(var i=0; i<rating;i++){
			$('<i class="fas fa-star"></i>').appendTo(el);
		}
	});


	if($('#map').length > 0){

		var lat = $('#map').data('lat');
		var lng = $('#map').data('lng');
		var title = $('#map').data('title');
		var center ={lat:lat,lng:lng};
		var map = L.map('map').setView(center,17);
		L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v9/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiaG9sbHlib3VybmV2aWxsZSIsImEiOiJjamtrZXlydTgwOGV4M3FvMjRmeGRoanVyIn0.jiZCNE5TVqmM8Ovl2lMVKw').addTo(map);;

		var marker = L.marker([lat, lng]).addTo(map);

		marker.bindPopup(title).openPopup();
	}
	    
});


