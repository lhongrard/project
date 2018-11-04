
var map;
var marker = [];
var gmarkers = [];
var housemarker = []

var map2;
var marker2 = [];
var gmarkers2 = [];

var infowindow ; 

var dataJson = {}
dataJson.token = localStorage.getItem('token')


function initMap() {
	setTimeout(function(){ 
		var latStr = localStorage.getItem("local_lat");
		var lngStr = localStorage.getItem("local_lng");
	
		if(localStorage.getItem("lat")){
			latStr = localStorage.getItem("lat");
			lngStr = localStorage.getItem("lng");
		}
		
		var uluru = {lat: parseFloat(latStr), lng: parseFloat(lngStr)};
	
		// console.log("uluru = "+JSON.stringify(uluru))
	
		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 20,
			center: uluru,
			mapTypeId: 'satellite'
		});
	
		marker = new google.maps.Marker({
			position: uluru,
			map: map,
			draggable:true
		});

		gmarkers.push(marker);
	
		google
			.maps
			.event
			.addListener(marker, 'dragend', function(){

				var myPoint = marker.getPosition();
				map.panTo(myPoint);
	
				console.log(myPoint.lat() + " " + myPoint.lng());
	
				if(document.location.pathname.match(/[^\/]+$/)[0] == 'opt.html'){
					$('#opt_location_lat').val(myPoint.lat())
					$('#opt_location_lng').val(myPoint.lng())
	
				}else if(document.location.pathname.match(/[^\/]+$/)[0] == 'household.html'){
					$('#house_location_lat').val(myPoint.lat())
					$('#house_location_lng').val(myPoint.lng())
				}
	
			});

		infowindow = new google
			.maps
			.InfoWindow();

		// GET MARKER FROM DATABASE
		
		$.ajax(
			{
				method: "GET",
				url: "https://bayclouds.com/getMarkerHouse/"+dataJson.token
			}
		).done(function(msg){
			console.log(msg)
			if(msg.status == "ok"){
				$.each(msg.data, function( key, value ) {
					// console.log(value.house_location_lat+" "+value.house_location_lng)
					housemarker = new google.maps.Marker({
						position: {
							lat:value.house_location_lat,
							lng:value.house_location_lng
						},
						animation: google.maps.Animation.DROP,
						map: map,
						icon: './markers/blue_MarkerS.png'
					});

					google
                    .maps
                    .event
                    .addListener(housemarker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(`<p>${value.house_no} </p>`);
                            infowindow.open(map, marker);
                        }
                    })(housemarker, key));
				});
			}else{
				alert("เกิดปัญหาที่ระบบเชื่อมต่อข้อมูลค่ะ")
			}
		})
			
	
		if(document.getElementById('map2')){
			map2 = new google.maps.Map(document.getElementById('map2'), {
				zoom: 20,
				center: uluru,
				mapTypeId: 'satellite'
			});

			var marker2 = new google.maps.Marker({
				position: uluru,
				map: map2,
				draggable:true
			});
	
			gmarkers2.push(marker);

			google
				.maps
				.event
				.addListener(marker2, 'dragend', function(){
					var myPoint2 = marker2.getPosition();
					map2.panTo(myPoint2);
	
					console.log(myPoint2.lat() + " " + myPoint2.lng());
					$('#vilage_location_lat').val(myPoint2.lat())
					$('#vilage_location_lng').val(myPoint2.lng())
	
				});
				$('#myModal').on('click', function(){
					google.maps.event.trigger(map2, "resize");
				});
		}

	}, 1500);
}

function setCenter(btnLoad,locat_lat,locat_lng,getMap) {
	var mapShow;
	if(getMap == 'map'){
		mapShow = map;
		for(i=0; i<gmarkers.length; i++){
			gmarkers[i].setMap(null);
		}
	}else if(getMap == 'map2'){
		mapShow = map2;
		for(i=0; i<gmarkers2.length; i++){
			gmarkers2[i].setMap(null);
		}
	}else{
        mapShow = map2;
        for(i=0; i<gmarkers2.length; i++){
            gmarkers2[i].setMap(null);
        }
	}
	$("#"+btnLoad).addClass("loading");

	// marker = []
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator
            .geolocation
            .getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
				};
				
                var marker = new google
                    .maps
                    .Marker({
                        position: {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        },
                        map: mapShow,
                        title: 'Maker',
                        draggable: true
                    });
                
				gmarkers.push(marker);
				gmarkers2.push(marker);
				
				// gmarkers.push(marker);
				

                google
                    .maps
                    .event
                    .addListener(marker, 'dragend', function () {
                        var my_Point = marker.getPosition(); // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
                        mapShow.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
						$("#"+locat_lat).val(my_Point.lat())
						$("#"+locat_lng).val(my_Point.lng())
                    });

					mapShow.setCenter(pos);
					mapShow.setZoom(20);
                $("#"+locat_lat).val(pos.lat);
                $("#"+locat_lng).val(pos.lng);
                $("#"+btnLoad).removeClass("loading");

            }, function () {
                alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
                $("#"+btnLoad).removeClass("loading");
            });
    } else {
        // Browser doesn't support Geolocation
        alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
        $("#"+btnLoad).removeClass("loading");
    }

} 

/* var map;
var map2;
var marker = [];
var marker2 = [];
function initMap() {
	var latStr = localStorage.getItem("lat");
	var lngStr = localStorage.getItem("lng");
	var uluru = {lat: parseFloat(latStr), lng: parseFloat(lngStr)};
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
        center: uluru
    });
    
    map2 = new google.maps.Map(document.getElementById('map2'), {
		zoom: 16,
        center: uluru
    });


	var marker = new google.maps.Marker({
		position: uluru,
		map: map,
		draggable:true
    });
    
    var marker2 = new google.maps.Marker({
		position: uluru,
		map: map2,
		draggable:true
	});

	google
		.maps
		.event
		.addListener(marker, 'dragend', function(){
			var myPoint = marker.getPosition();
			map.panTo(myPoint);

			console.log(myPoint.lat() + " " + myPoint.lng());
			$('#opt_location_lat').val(myPoint.lat())
            $('#opt_location_lng').val(myPoint.lng())

        });
        
    google
		.maps
		.event
		.addListener(marker2, 'dragend', function(){
            var myPoint2 = marker2.getPosition();
			map2.panTo(myPoint2);

			console.log(myPoint2.lat() + " " + myPoint2.lng());
			$('#vilage_location_lat').val(myPoint2.lat())
			$('#vilage_location_lng').val(myPoint2.lng())

		});
}*/


