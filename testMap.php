<body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU4AlB2IxjVm3usy3xHvkzopAlgCc2E2w" type="text/javascript"></script>
	<script type="text/javascript">
			var map
			var lat = 13.81674404684894
			var lng = 100.62034606933594
			var xmlhttp
			var point
			var geocoder = null;
			var address = null;

function load() {
      if (GBrowserIsCompatible()) {
		      map = new GMap2(document.getElementById("map_canvas"));
     	    var bounds = new GLatLngBounds();
	        var ovcontrol = new GOverviewMapControl(new GSize(150,150));
		      point = new GLatLng(lat,lng,true);
   		    map.setCenter(point, 5);
		      map.setUIToDefault();
          bounds.extend(point);
		      map.addControl(ovcontrol);
		   	  setInterval("loadajax()",1000*10);
	  		  }
    	}

function loadajax(){
	xmlhttp = new XMLHttpRequest
		if (xmlhttp==null)
  		{
  			alert ("Browser does not support HTTP Request");
 			return;
  		}
	var url="ajax_1.php";
	url=url+"?sid="+Math.random();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4){
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		     data_split();
			}
		}
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);

}
function data_split() {
	  var objText = document.getElementById("txtHint").value;
	  var e = objText.split(",");
	  var Marklat = parseFloat(e[1]);
      var Marklng = parseFloat(e[2]);
	  var sta = e[0];
	  mark(Mlat,Mlng,sta);

}
function mark(Marklat,Marklng,sta){
			var iconn = new GIcon(G_DEFAULT_ICON);
			    iconn.iconSize = new GSize(25,25);
			        if( sta == 'A'){
			             iconn.image = "green.png";
			        }else
			             iconn.image = "red.png";
			map.clearOverlays() ;
			var markpoint = new GLatLng(Marklat,Marklng,true);
			geocoder = new GClientGeocoder();
			marker = new GMarker(markpoint,{icon:iconn});
			map.addOverlay(marker);
			GEvent.addListener(marker, 'click', function(){
		   		geocoder.getLocations(markpoint, function(addresses) {
  					if(addresses.Status.code != 200) {
   				 		alert("reverse geocoder failed to find an address for " + markpoint.toUrlValue());
 				 	} else {
   				 		var result = addresses.Placemark[0];
    					map.openInfoWindow(markpoint, result.address);
  				  	}
				});
			});
		}


</script>
<script type="text/javascript"></script></head>
<body onload="load()" onunload="GUnload()">
<div id="map_canvas" style="width:1000px;height:600px"></div>
</body>
