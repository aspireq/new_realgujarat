<!DOCTYPE html>
<html>
    <?php echo $header; ?> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo $name; ?></h3>
            </div>
            <div class="col-md-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
    
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