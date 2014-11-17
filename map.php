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
        loadPoints(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function trim(str) {
        return str.replace(/^\s+|\s+$/g, '');
    }
    function loadPoints(map) {
        $.get("<?php echo get_template_directory_uri(); ?>/locations.csv",
            function(data) {
                var lines = data.split(/\n/);
                for (var i = 0; i < lines.length; i++) {
                    if (!lines[i]) continue;
                    var vals = lines[i].split(':');
                    var latLng = vals[1].split(',');

                    var latLngObj = new google.maps.LatLng(parseFloat(trim(latLng[0])), parseFloat(trim(latLng[1])));
                    var marker = new google.maps.Marker({
                        position: latLngObj, 
                        map: map,
                        title: vals[0]
                    });

                    var infoWindow = new google.maps.InfoWindow({content: vals[0]});
                    google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.setContent(this.title);
                        infoWindow.open(map, this); 
                    });
                }
            }
        );
    }
</script>
</div>
<?php
get_sidebar();
get_footer();
?>
