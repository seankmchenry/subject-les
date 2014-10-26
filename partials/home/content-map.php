<?php
/**
 * Template for displaying the info section map
 *
 * @package _s
 */
?>

<?php // set up map and address stuff
$map = get_field( 'google_map' );
$address = $map['address'];
$latitude = $map['lat'];
$longitude = $map['lng'];
// set up stuff to display in info window
$bar_name = get_bloginfo( 'name' );
$street = get_field( 'street_address' );
$city_state_zip = get_field( 'city_state_and_zip' ); ?>

<div id="map" style="width: 100%; height: 375px;"></div>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script type="text/javascript">
//<![CDATA[
function _s_google_map() {
	var lat = <?php echo $latitude; ?>;
	var lng = <?php echo $longitude; ?>;
	// coordinates to latLng
	var latlng = new google.maps.LatLng(lat, lng);
	// map Options
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};
	//draw a map
	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	var marker = new google.maps.Marker({
		position: map.getCenter(),
		map: map
	});
	var contentString = '<div id="content">'+
		'<h3>'+'<a href="https://www.google.com/maps/place/<?php echo urlencode( $address ); ?>" target="_blank">'+
		'<?php echo $bar_name; ?>'+
		'</a>'+'</h3>'+
		'<span>'+'<?php echo $street; ?>'+'</span>'+
		'<span>'+'<?php echo $city_state_zip; ?>'+'</span>'+
		'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
	infowindow.open(map,marker);
}
// load the map
_s_google_map();
//]]>
</script>