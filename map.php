<?php
/*
Template Name: waypoints
 */
get_header();
?>
<div class="col-md-9">
<h2>Around and around we go</h2>
<div id="google-map" class="google-map"></div>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    var map;
    function initialize() {
        var options = {
            center: new google.maps.LatLng(15.175473711785783, 104.18007890624995),
            zoom:6,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('google-map'), options);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function loadPoints() {
        for (var i = 0; i < data.length; i++) {
            var latLng = new google.maps.LatLng(data[i][0], data[i][1]);
            var marker = new google.maps.Marker({position: latLng, map: map});
        }
    }
</script>
</div>
<?php
get_sidebar();
get_footer();
?>
