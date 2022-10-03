<html lang="en">

<div class="wrap-input100 validate-input" data-validate="city is required"><span class="label-input100">:الموقع</span>
				  <input class="input100" id="loCation" type="text" required name="req[location]" placeholder="رابط الموقع من قوقل ماب" >
					
				</div>
				<div id="map" style="width: 1000px;height: 500px;overflow: hidden;position: relative;"></div>

	<script>
var map;
    function initialize() {

        var myLatlng = new google.maps.LatLng(24.7244553,46.542343);

        var myOptions ={

            zoom: 8,

            center: myLatlng,

            mapTypeId: google.maps.MapTypeId.ROADMAP

        };

        map = new google.maps.Map(document.getElementById("map"), myOptions);

        var marker = new google.maps.Marker({

            draggable: true,

            position: myLatlng,

            map: map,

            title: "Your location"

        });

        google.maps.event.addListener(marker, 'dragend', function (event) {

            document.getElementById("loCation").value = event.latLng.lat()+','+event.latLng.lng();

            infoWindow.open(map, marker);

        });

    }
    google.maps.event.addDomListener(window, "load", initialize());
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9UeezZ2xyNjrwck8SLdh9NxsJp6HhLQc&callback=initialize">
</script>
</html>