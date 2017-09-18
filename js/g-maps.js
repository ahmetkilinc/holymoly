var geocoder;
var map;
var marker;
var marker1;
var marker2;
var marker3;
var request;
var request2;
var request3;
var uzaklikTemelli;
var uzaklikHasanoglan;
var uzaklikSaray;
var directionsService;
var elevator;
document.getElementById('input_rakim').value = 0;

function initialize(){
	
    //MAP
   	if($('#longitude').val().length > 0){
		
   		var latlng = new google.maps.LatLng($('#latitude').val(),$('#longitude').val());
	}
	
	else{
		
    	var latlng = new google.maps.LatLng(39.925533, 32.866287);
   	}
    
    var options = {
		
        zoom: 10,
        center: latlng,
		scrollwheel: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map($("#geoSearch")[0], options);

    
    geocoder = new google.maps.Geocoder();
    
	var image = 'iconfactory.png';
    marker = new google.maps.Marker({
		
		map: map,
		draggable: true,
		icon: image,
		position: latlng,
        title: "Bina"
    });
	
	marker1 = new google.maps.Marker({
		
        map: map,
		position: new google.maps.LatLng(39.802698, 32.458666),
        title: "Temelli Fabrika"
	});
	
	marker2 = new google.maps.Marker({
		
		map: map,
		position: new google.maps.LatLng(40.006669, 33.18073800000002),
        title: "Hasanoğlan Fabrika"
    });
	
	marker3 = new google.maps.Marker({
		
        map: map,
		color: 0xffffff,
		position: new google.maps.LatLng(40.06148900000001, 32.61691100000007),
        title: "Saray Fabrika"
    });
	
	
	var script = document.createElement('script');
  
    script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp';
    document.getElementsByTagName('head')[0].appendChild(script);

	map.data.setStyle(function(feature){
	   	
       var magnitude = feature.getProperty('mag');
       return{
	       
          icon: getCircle(magnitude)
       };
    }); 
	   	
directionsService = new google.maps.DirectionsService();
	
elevator = new google.maps.ElevationService;
		

}

	function getCircle(magnitude){
		
        return{
			
          path: google.maps.SymbolPath.CIRCLE,
          fillColor: 'red',
          fillOpacity: .2,
          scale: Math.pow(2, magnitude) / 2,
          strokeColor: 'white',
          strokeWeight: .5
        };
      }

	function eqfeed_callback(results){
		
        map.data.addGeoJson(results);
      }
    
$(document).ready(function(){

    initialize();

    $(function(){
		
        $("#address").autocomplete({
			
            source: function(request, response){
				
                geocoder.geocode({'address': request.term}, function(results, status){
					
                    response($.map(results, function(item){
						
                        return{
							
                            label:  	item.formatted_address,
                            value: 		item.formatted_address,
                            latitude: 	item.geometry.location.lat(),
                            longitude: 	item.geometry.location.lng()
                        }
                    }));
                })
            },

            select: function(event, ui){
				
                $("#latitude").val(ui.item.latitude);
                $("#longitude").val(ui.item.longitude);
                var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
                marker.setPosition(location);
                map.setCenter(location);
            }
        });
    });

    google.maps.event.addListener(marker, 'drag', function(){
		
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status){
			
            if (status == google.maps.GeocoderStatus.OK){
				
                if (results[0]){
					
                    $('#latitude').val(marker.getPosition().lat());
                    $('#longitude').val(marker.getPosition().lng());
					
					request = {
				
					  origin      : marker.getPosition(),
					  destination : marker1.getPosition(),
					  travelMode  : google.maps.DirectionsTravelMode.DRIVING
					};

					request2 = {

					  origin      : marker.getPosition(),
					  destination : marker2.getPosition(),
					  travelMode  : google.maps.DirectionsTravelMode.DRIVING
					};

					request3 = {

					  origin      : marker.getPosition(),
					  destination : marker3.getPosition(),
					  travelMode  : google.maps.DirectionsTravelMode.DRIVING
					};
					
					

					console.log("request:" + request);
					console.log("request2:" + request2);
					console.log("request3:" + request3);

					displayLocationElevation(marker.getPosition(), elevator);
					
					displayLocationDistance(request, request2, request3);

					/*
					var uzaklikTemelli = (google.maps.geometry.spherical.computeDistanceBetween(marker.getPosition(), marker1.getPosition()) / 1000).toFixed(6);
					var uzaklikHasanoglan = (google.maps.geometry.spherical.computeDistanceBetween(marker.getPosition(), marker2.getPosition()) / 1000).toFixed(6);
					var uzaklikSaray = (google.maps.geometry.spherical.computeDistanceBetween(marker.getPosition(), marker3.getPosition()) / 1000).toFixed(6);*/
					
					
                }
            }
        });

		function displayLocationElevation(location, elevator){
					
			elevator.getElevationForLocations({
							
				'locations': [location]
			}, function(results, status){
							
				if (status === 'OK'){

					// Retrieve the first result
					if (results[0]){

					// Open the infowindow indicating the elevation at the clicked position.
						console.log('Yükseklik bu noktada: ' +
							results[0].elevation.toFixed(0) + ' metredir.');
						
						document.getElementById('input_rakim').value = results[0].elevation.toFixed(0);

					} else{

						document.getElementById('input_rakim').value = "";
						console.log('Sonuç Bulunamadı.');
					}
								
				} else{

					document.getElementById('input_rakim').value = "";
					console.log('Elevation servis kullanılamıyor: ' + status);
				}
			});
		}
		
		function displayLocationDistance(request, request2, request3){
			
					//mesafeleri değişkenlere atayıp konsolo yazdırma
					directionsService.route(request, function(response, status){
				
						if(status === 'OK'){

							uzaklikTemelli = response.routes[0].legs[0].distance.value;
							//console.log(uzaklikTemelli);// the distance in metres
					  }

					  else{

							console.log("mesafe ölçülemedi");
							//alert("Mesafe ölçülemiyor.");
					  }
					});
					
					directionsService.route(request2, function(response, status){
				
				  		if(status == 'OK'){

							uzaklikHasanoglan = response.routes[0].legs[0].distance.value; // the distance in metres
							//console.log(uzaklikHasanoglan);
				  		}

				  		else{
					  
					 		console.log("mesafe ölçülemedi");
							//alert("Mesafe ölçülemiyor.");
				  		}
					});

					directionsService.route(request3, function(response, status){

						if(status == 'OK'){

							uzaklikSaray = response.routes[0].legs[0].distance.value; // the distance in metres
							//console.log(uzaklikSaray);
						}

				  		else{

					 		console.log("mesafe ölçülemedi");
							//alert("Mesafe ölçülemiyor.");
				  		}
					});
			
					console.log("Temelli Fabrikasına Uzaklık: " + uzaklikTemelli);
					console.log("Hasanoğlan Fabrikasına Uzaklık: " + uzaklikHasanoglan);
					console.log("Saray Fabrikasına Uzaklık: " + uzaklikSaray);
					
					if(uzaklikTemelli ==  Math.min(uzaklikTemelli, uzaklikHasanoglan, uzaklikSaray)){
						
						console.log("en kısa uzaklık Temelli Fabrikası: " + uzaklikTemelli);
						//hidden form'a uzaklıkları ekle...
						document.getElementById('input_fabrika').value = "Temelli Fabrikası, uzaklık: " + uzaklikTemelli + "m";
					}
					
					else if(uzaklikHasanoglan == Math.min(uzaklikTemelli, uzaklikHasanoglan, uzaklikSaray)){
						
						console.log("en kısa uzaklık Hasanoğlan Fabrikası: " + uzaklikHasanoglan);
						document.getElementById('input_fabrika').value = "Hasanoğlan Fabrikası, uzaklık: " + uzaklikHasanoglan + "m";
					}
					
					else{
						
						console.log("en kısa uzaklık Saray Fabrikası: " + uzaklikSaray);
						document.getElementById('input_fabrika').value = "Saray Fabrikası, uzaklık: " + uzaklikSaray + "m";
					}
		}

    });
});