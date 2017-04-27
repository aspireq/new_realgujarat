<!DOCTYPE html>
<html>
    <?php echo $header; ?> 
    <div id="map"></div>
    <script>

        function initMap() {
            var myLatLng = {lat: <?php echo $lat; ?>, lng: <?php echo $long; ?>}

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: '<?php echo $name; ?>'
            });
        }
    </script>
    <?php echo $footer; ?>